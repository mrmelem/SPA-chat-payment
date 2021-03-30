<?php


if (isset($_POST)) {
    session_start();
    
    if (@$_POST['user'] == 'simpliart' && @$_POST['password'] == 'davi123') {
        $_SESSION['login'] = true;
        $data = array(
            'sucess' => true,
            'session' => $_SESSION
        );
        die(json_encode($data));
    } else if (@$_POST['loggout']) {
        session_destroy();
    } else {
        die(json_encode(false));
    }
}
