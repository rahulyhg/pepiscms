<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
|---------------------------------------------------------------
| INITIALIZATION OF HTML CACHE SYSTEM
|---------------------------------------------------------------
|
| Use one of the following lines, memcache and filesystem they are
| mutually exclusive. When using memcache please update the config
| file application/config/memcache.php
*/
require_once APPPATH . 'tools/fast_cache_filesystem.php';


/*
|---------------------------------------------------------------
| LOAD VERSION INFO
|---------------------------------------------------------------
|
| Defines CMS version
|
*/
require_once APPPATH . 'version.php';


/*
|---------------------------------------------------------------
| File bridge
|---------------------------------------------------------------
|
| Used for loading admin panel styles, images etc
|
*/
if (isset($_GET['bridge'])) {
    require_once APPPATH . 'tools/bridge.php';
    die();
}


/*
|---------------------------------------------------------------
| PepisCMS CLI
|---------------------------------------------------------------
|
| @since 0.2.2
|
*/
require_once APPPATH . 'tools/cli.php';