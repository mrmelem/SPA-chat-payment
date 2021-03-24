<?php

include('./bin/keys.php');
include('./config.php');



$url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home';


include('./src/components/header-seo.php');
include('./src/components/header-default.php');

if (file_exists('./src/pages/' . $url . '/' . $url . '.php')) {
    include('./src/pages/' . $url . '/' . $url . '.php');
} else {
    include('./src/components/error01.php');
}

include('./src/components/footer-default.php');
