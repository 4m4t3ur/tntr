<?php

define('WPPLUGINS', 'http://api.wordpress.org/plugins');
define('ZUPCHECK','http://support.zone.ee/WZUP/');
define('WPUPCHECK', WPPLUGINS .'/update-check');
define('WPINFOCHECK', WPPLUGINS .'/info');


class ZonePlus {
    var $p;
    var $basename;
    
    function ZonePlus($filename) {
        add_filter( 'http_request_args', array( &$this, 'cower'), 5, 2 );
        add_filter( 'http_response', array( &$this, 'zup'), 5,3 );
        add_filter('plugins_api', array( &$this, 'zi'), 10, 3);
        add_action('wp_loaded', array(&$this, 'def'));
        $this->basename = plugin_basename($filename);
    }

    public function cower( $r, $url ) {
        if ( 0 !== strpos( $url, WPUPCHECK ) ) return $r;
        $p = unserialize($r['body']['plugins']);
        unset( $p->plugins[ $this->basename ] );
        unset( $p->active[ array_search( $this->basename, $p->active ) ] );
        $r['body']['plugins'] = serialize( $p );
        return $r;
    }


    public function zup ($response, $r = '', $url = '' ) {
        if ( 0 !== strpos( $url, WPPLUGINS )) return $response;
        if ($response['response']['code'] == 200) {
            if ( strstr( $url, WPUPCHECK )) {
                $this->p['body']['ACT'] = 'up';
                $wzr = $this->cw();
                if (!is_null($wzr)) {
                    $b = unserialize($response['body']);
                    $b[$this->basename] = (object) $wzr;
                    $response['body'] = serialize($b);
                }
            }
        }
        return $response;
    }
    
    function zi($result, $action = null, $args = null) {
        if ($args->slug == 'zoneplus') {
            $this->p['body']['ACT'] = 'info';
            $wz_resp = $this->cw();
            if (!is_null($wz_resp)) return (object) $wz_resp;
        }
       return $result;
    }
    
    private function cw() {
        $r = wp_remote_post(ZUPCHECK, $this->p);
        if (!is_wp_error($r) && !empty($r['body']))
            return unserialize($r['body']);
        return null;
    }

    function def($options = '') {
        if ( !function_exists('get_plugins') ){
            require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
        }
        $plugins = get_plugins();
        $this->p = Array( 'timeout' => 5, 'body' => Array('WPV' => $GLOBALS['wp_version'], 'WZV' => $plugins[$this->basename]['Version']));
        return true;
    }
}
