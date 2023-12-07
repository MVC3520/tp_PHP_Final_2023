<?php
// Desactivar toda las notificaciónes del PHP

error_reporting(0);

 
// Notificar solamente errores de ejecución

error_reporting(E_ERROR | E_WARNING | E_PARSE);


error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);


// Mostrar todos los errores menos el E_NOTICE

// Valor predeterminado ya descrito en php.ini

error_reporting(E_ALL ^ E_NOTICE);


//Notificar todos los errores de PHP

error_reporting(E_ALL);


// Notificar todos los errores de PHP
error_reporting(-1);

 

// Lo mismo que error_reporting(E_ALL);

ini_set('error_reporting', E_ALL);

?>