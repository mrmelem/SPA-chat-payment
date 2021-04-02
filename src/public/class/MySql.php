<?php

class MySql
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

    public static function selectAll($table)
    {
        $pdo = MySql::conectar()->prepare("SELECT * FROM `" . $table . "`");
        $pdo->execute();
        return $pdo->fetchAll();
    }

    public static function updateCMS($arr, $table = null)
    {
        try {
            $pdo = MySql::conectar()->prepare("UPDATE `tb_home` SET content=? WHERE container=? ");
            foreach ($arr as $key => $value) {
                $pdo->execute(array($value, $key));
            }
        } catch (Exception $e) {
            return ($e);
        }
    }

    public static function selectById($table, $id)
    {
        $pdo = MySql::conectar()->prepare("SELECT * FROM `" . $table . "` WHERE `id` = ?");
        $pdo->execute(array($id));
        return $pdo->fetchAll();
    }

    public static function selectByToken($table, $token)
    {
        $pdo = MySql::conectar()->prepare("SELECT * FROM `" . $table . "` WHERE `token` = ?");
        $pdo->execute(array($token));
        return $pdo->fetchAll();
    }

    public static function updateById($table, $id, $arr)
    {
        try {
            $pdo = MySql::conectar()->prepare("UPDATE `" . $table . "` SET `token`=?, `titulo`=?, `descricao`=?, `image`=?  WHERE id=? ");
            $pdo->execute(array($arr['token'], $arr['titulo'], $arr['descricao'], $arr['image'], $id));
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function deleteById($table, $token)
    {
        try {
            $pdo = MySql::conectar()->prepare("DELETE FROM `" . $table . "` WHERE `token`=? ");
            $pdo->execute(array($token));
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function insert($table, $arr)
    {
        $certo = true;
        $query = "INSERT INTO `$table` VALUES (null";
        foreach ($arr as $key => $value) {
            $nome = $key;
            $valor = $value;
            if ($nome == 'acao' ||  $nome == 'nome_tabela' || $nome == 'destino' || $nome == 'identificador') {
                continue;
            }

            if ($valor = '') {
                $certo = false;
                break;
            }

            $query .= ",?";
            $parametros[] = $value;
        }
        $query .= ")";
        if ($certo == true) {
            $sql = \MySql::conectar()->prepare($query);
            $sql->execute($parametros);
        }

        return $certo;
    }

    public static function updateByToken($table, $token, $arr)
    {
        $certo = true;
        $query = "UPDATE `$table` SET ";
        $i = 0;
        foreach ($arr as $key => $value) {
            $i++;
            $nome = $key;
            $valor = $value;
            if ($nome == 'acao') {
                continue;
            }

            if ($valor = '') {
                $certo = false;
                break;
            }
            $parametros[] = $value;
            if (count($arr) == $i) {
                $query .= '`' . $key . '`=? ';
                $parametros[] = $arr['token'];
            } else {
                $query .= '`' . $key . '`=?, ';
            }
        }
        $query .= "WHERE `token` = ?";

        if ($certo == true) {
            $sql = \MySql::conectar()->prepare($query);
            $sql->execute($parametros);
        }

        return $certo;
    }
}
