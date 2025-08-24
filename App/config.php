<?php

// 1º O diretório base
// 2º Onde estão as views
// 3º Acesso ao banco de dados

//echo dirname(__FILE__, 1);

define('BASE_DIR', dirname(__FILE__, 2));
define('VIEWS', BASE_DIR . '/view');

$_ENV['db']['host'] = "localhost:3306";
$_ENV['db']['user'] = "root";
$_ENV['db']['pass'] = "leo49";
$_ENV['db']['database'] = "biblioteca";