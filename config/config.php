<?php

define('SERVEUR_URL',  'http://localhost/');
define('BASE_URL', SERVEUR_URL . 'portfolio/');


define('BASE_FILE', "CheminDuRepertoireDuPorfolio");

/* constante LIB_FILE utilisée par l'autoload */
define('LIB_FILE', BASE_FILE . "lib/");

/* inclure le fichier avec l'autoload */
require_once("../config/autoload.php");




/**
 * Constantes concernant la base de données
*/
define("SERVER","");
define("USER","");
define("PASSWD","");
define('DB_NAME', ");
define('PORT', "");
define("PDO_DSN","mysql:host=" . SERVER . ";port=" . PORT . ";dbname=" . DB_NAME.");



?>