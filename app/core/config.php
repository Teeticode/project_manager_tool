<?php

/***
 * app info
 */
define('APPNAME', 'Teeticolab');
define('APP_DESC', 'Teeti Colab');

/***
 * Database config
 */
if($_SERVER['SERVER_NAME'] == 'localhost')
{
    define("DBHOST", 'localhost');
    define("DBUSER", 'root');
    define("DBPASS", '');
    define("DBDRIVER", 'mysql');
    define("DBNAME", 'portfolio');
    define('ROOT', 'http://localhost/portfolio/public');

}else{
    define("DBHOST", 'localhost');
    define("DBUSER", 'root');
    define("DBPASS", '');
    define("DBDRIVER", 'mysql');
    define("DBNAME", 'portfolio');
    define('ROOT', 'http://localhost/portfolio/public');

}