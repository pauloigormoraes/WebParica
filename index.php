<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Manaus");
setlocale(LC_ALL, 'pt_BR');

session_start();
$_SESSION['userId'] = '1234';

print "Hello World";

?>