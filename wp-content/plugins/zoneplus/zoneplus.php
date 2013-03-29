<?php
/*
 Plugin Name: ZonePlus
 Plugin URI: http://www.zone.ee
 Description: Zone+ plugin for WordPress. A plugin which in the future will provide advanced functionality to people using the Zone+ platform for WordPress installation.
 Version: 0.8
 Author: Zone Media
 License: Commercial
 */

require( dirname(__FILE__) .'/zoneplus.class.php');

$zoneplus = new ZonePlus(__FILE__);
