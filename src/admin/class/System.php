<?php

class System
{
    public static function arrayToString($array, $div)
    {
        $string = "";
        for ($i = 1; $i <= count($array); $i++) {
            if ($array[$i - 1] !== '') {
                $string .= $array[$i - 1];
            } else {
                $string .= "null";
            }
            if ($i != count($array)) {
                $string .= $div;
            }
        }
        return $string;
    }

    public static function validarImagem($image)
    {
        if ($image['type'] == 'image/jpeg' || $image['type'] == 'image/png' || $image['type'] == 'image/jpg') {
            return true;
        } else {
            return false;
        }
    }

    public static function uploadImage($image)
    {
        $image['name'] = uniqid();
        if (move_uploaded_file($image['tmp_name'], BASE_DIR . '\\src\public\assets\\' . $image['name'])) {
            return $image['name'];
        } else {
            return false;
        }
    }

    public static function checkOrder($token){
        if(count(MySql::selectByToken('tb_orders', $token)) != 0){
            return true;
        }else{
            return false;
        }
    }
}
