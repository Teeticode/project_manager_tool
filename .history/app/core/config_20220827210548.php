<?php

/***
 * app info
 */
define('APP_NAME', 'Portfolio');
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
}else{
    define("DBHOST", 'localhost');
    define("DBUSER", 'root');
    define("DBPASS", '');
    define("DBDRIVER", 'mysql');
    define("DBNAME", 'portfolio');
}