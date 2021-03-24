<?php

class Sql
{
    private static $pdo;

    public static function conectar()
    {
        if (self::$pdo == null) {
            try {
                self::$pdo = new PDO('mysql:host=' . host . ';dbname=' . dbname, user, password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                echo 'Error 101. Por favor, contate o suporte!';
            }
        }

        return self::$pdo;
    }
}
