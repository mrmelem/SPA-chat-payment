<?php


function MyAutoLoad($class)
{
    if (file_exists('./src/class/' . $class . '.php')) {
        include('./src/class/' . $class . '.php');
    } else {
        die('Classe ' . $class . ' não encontrada');
    }
}

spl_autoload_register('MyAutoLoad');
