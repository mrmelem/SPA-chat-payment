<?php

class Styles
{
    static function Color($page)
    {
        $data = MySql::selectAll('tb_' . $page);
        foreach ($data as $key => $value) {

            if ($value['container'] == 'color') {
                $color = $value['content'];
                $color = explode("--!--", $color);
                foreach ($color as $key => $value) {
                    $itens = explode('-->', $value);
                    $style[$itens[0]] = $itens[1];
                }
            }
        }
        return $style;
    }

    static function Logo($page)
    {
        $data = MySql::selectAll('tb_' . $page);
        foreach ($data as $key => $value) {
            if ($value['container'] == 'logo-header') {
                $image = $value['content'];
            }
        }
        return $image;
    }

    static function background($page)
    {
        $data = MySql::selectAll('tb_' . $page);
        foreach ($data as $key => $value) {
            if ($value['container'] == 'background-image-main') {
                $image = $value['content'];
            }
        }
        return $image;
    }

    static function fontSize($page)
    {
        $data = MySql::selectAll('tb_' . $page);
        foreach ($data as $key => $value) {

            if ($value['container'] == 'fontSize') {
                $color = $value['content'];
                $color = explode("--!--", $color);
                foreach ($color as $key => $value) {
                    $itens = explode('-->', $value);
                    $style[$itens[0]] = $itens[1];
                }
            }
        }
        return $style;
    }

    static function fontFamily($page)
    {
        $data = MySql::selectAll('tb_' . $page);
        foreach ($data as $key => $value) {

            if ($value['container'] == 'fontFamily') {
                $color = $value['content'];
                $color = explode("--!--", $color);
                foreach ($color as $key => $value) {
                    $itens = explode('-->', $value);
                    $style[$itens[0]] = $itens[1];
                }
            }
        }
        return $style;
    }
}
