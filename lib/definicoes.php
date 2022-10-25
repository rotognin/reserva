<?php

header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

require ('./vendor/autoload.php');

define("DS", DIRECTORY_SEPARATOR);
define("APP_VERSION", '2022.10.25-001');

define("NIVEL", array(
    '1' => 'Administrador',
    '2' => 'Cliente'
));

define("STATUS", array(
    '0' => 'Ativo',
    '1' => 'Inativo'
));