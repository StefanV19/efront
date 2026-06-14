<?php
//This file cannot be called directly, only included.
if (str_replace(DIRECTORY_SEPARATOR, "/", __FILE__) == $_SERVER['SCRIPT_FILENAME']) {
    exit;
}

/** The database Host */
define('G_DBTYPE', 'postgresql');
/** The database Host */
define('G_DBHOST', 'postgresql://efront_database_user:svkK4IXJ25Z2mmCYJSN3D2d0LAQFuoLk@dpg-d8nbtbm7r5hc73al78dg-a/efront_database');
/** The database user*/
define('G_DBUSER', 'efront_database_user');
/** The database user password*/
define('G_DBPASSWD', 'svkK4IXJ25Z2mmCYJSN3D2d0LAQFuoLk');
/** The database name*/
define('G_DBNAME', 'efront_database');
/** The database tables prefix*/
define('G_DBPREFIX', '');

/** The servername offset */
define('G_OFFSET', '/www/');

/**Software root path*/
define('G_ROOTPATH', str_replace("\\", "/", dirname(dirname(__FILE__)))."/");

/**Current version*/
define('G_VERSION_NUM', '3.6.14');

/**Include function files*/
require_once('globals.php');
?>
