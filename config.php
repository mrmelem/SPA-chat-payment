<?php


session_start();
date_default_timezone_set('America/Sao_Paulo');
function MyAutoLoad($class)
{
    if (file_exists('./src/public/class/' . $class . '.php')) {
        include('./src/public/class/' . $class . '.php');
    } else if (file_exists('./src/admin/class/' . $class . '.php')) {
        include('./src/admin/class/' . $class . '.php');
    } else {
        die('Classe ' . $class . ' não encontrada');
    }
}

spl_autoload_register('MyAutoLoad');

define('BASE_DIR', __DIR__);
