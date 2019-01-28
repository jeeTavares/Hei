<?php
require_once 'messages.php';

define( 'BASE_PATH', 'http://localhost/hei/');//pasta de encontro
define( 'DB_HOST', 'localhost' );//Servidor da base de dados
define( 'DB_USERNAME', 'root');//Utilixador da base de dados
define( 'DB_PASSWORD', '');//password da base de dados
define( 'DB_NAME', 'hei');//Nome da base de dados

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}