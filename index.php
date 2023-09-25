<?php
header('Content-Type: text/html; charset-utf-8');
$valtozo = filter_input(INPUT_GET, "valtozo", FILTER_SANITIZE_SPECIAL_CHARS);
var_dump($valtozo);
require_once('head.php');
require_once('body.php');