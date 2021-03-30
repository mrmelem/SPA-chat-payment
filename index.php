<?php

include('./bin/keys.php');
include('./config.php');
$_SESSION['login'] = true;

include('src/public/components/defaults/header.php');
if (isset($_GET['url'])) {
    $get = explode('/', $_GET['url']);
    $url = $get[0];
    if (count($get) > 1) {
        $context = $get[1];
    }
} else {
    $url = 'home';
}

if ($url == 'dashboard') {
    if (@$_SESSION['login']) {
        if (isset($context)) {
            if (file_exists('src/admin/views/' . $context . '/index.php')) {
                include('src/admin/views/' . $context . '/index.php');
            } else {
                echo "Erro";
            }
        } else {
            if (file_exists('src/admin/views/index.php')) {
                include('src/admin/views/index.php');
            } else {
                echo "Erro";
            }
        }
    } else {
        echo "Teste";
        header('Location:' . INCLUDE_PATH . 'login');
    }
} else  {
    if (file_exists('src/public/views/' . $url . '/index.php')) {
        include('src/public/views/' . $url . '/index.php');
    }else{
        header('Location:' . INCLUDE_PATH);
    }
}
include('src/public/components/defaults/footer.php');
