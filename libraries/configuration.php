<?php
//This file cannot be called directly, only included.
if (str_replace(DIRECTORY_SEPARATOR, "/", __FILE__) == $_SERVER['SCRIPT_FILENAME']) {
    exit;
}

/** The database Host */
define('G_DBTYPE', 'mysqli');
/** The database Host */
define('G_DBHOST', getenv('DB_HOST'));
/** The database user*/
define('G_DBUSER', getenv('DB_USER'));
/** The database user password*/
define('G_DBPASSWD', getenv('DB_PASSWD'));
/** The database name*/
define('G_DBNAME', getenv('DB_NAME'));
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
