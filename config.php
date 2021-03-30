<?php


session_start();

function MyAutoLoad($class)
{
    if (file_exists('./src/public/class/' . $class . '.php')) {
        include('./src/public/class/' . $class . '.php');
    } else {
        die('Classe ' . $class . ' não encontrada');
    }
}

spl_autoload_register('MyAutoLoad');
