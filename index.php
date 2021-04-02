<?php

include('./bin/keys.php');
include('./config.php');
$_SESSION['login'] = true;


if (isset($_GET['url'])) {
    $get = explode('/', $_GET['url']);
    $url = $get[0];
    if (count($get) > 1) {
        $context = $get[1];
    }
} else {
    $url = 'home';
}


include('src/public/components/defaults/header.php');
if ($url == 'dashboard') {
    if (@$_SESSION['login']) {
        if (isset($context)) {
            if (file_exists('src/admin/views/' . $context . '/index.php')) {
                include('src/admin/views/' . $context . '/index.php');
            } else {
                echo "Erro";
            }
        } else {
            if (file_exists('src/admin/views/home/index.php')) {
                include('src/admin/views/home/index.php');
            } else {
                echo "Erro";
            }
        }
    } else {
        echo "Teste";
        header('Location:' . INCLUDE_PATH . 'login');
    }
} else  if ($url == 'orders') {
    if (isset($context)) {
        if (System::checkOrder($context)) {
            include('src/public/views/orders/index.php');
        } else {
            header('Location:' . INCLUDE_PATH);
        }
    } else {
        header('Location:' . INCLUDE_PATH);
    }
} else {

    if (file_exists('src/public/views/' . $url . '/index.php')) {
        include('src/public/views/' . $url . '/index.php');
    } else {
        header('Location:' . INCLUDE_PATH);
    }
}
include('src/public/components/defaults/footer.php');
