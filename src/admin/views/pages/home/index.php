<?php
/*
$home = MySql::selectAll('tb_home');
$services = MySql::selectAll('tb_services');
$works = MySql::selectAll(('tb_works'));

foreach ($home as $key => $value) {
    if ($value['container'] == 'arrayWritter') {
        $writer = explode('--!--', $value['content']);
    };

    if ($value['container'] == 'logo-header') {
        $logo = $value['content'];
    };

    if ($value['container'] == 'background-image-main') {
        $backgroundImageMain = $value['content'];
    }
    if ($value['container'] == 'color') {
        foreach (explode('--!--', $value['content']) as $key => $value) {
            $data = explode('-->', $value);
            $colorArr[$data[0]] = $data[1];
        };
    };
}

if (isset($_POST['acao'])) {
    $string = explode(', ', $_POST['writter-animation']);
    $_POST['writter-animation'] = System::arrayToString($string, '--!--');

    $cor = array(
        'cor1-->' . $_POST['primeiraCor'],
        'cor2-->' . $_POST['segundaCor'],
        'cor3-->' . $_POST['terceiraCor'],
        'cor4-->' . $_POST['quartaCor'],
        'cor5-->' . $_POST['quintaCor'],
    );

    if (@$_FILES['logo']['name'] != ''){
        $imagem = $_FILES['logo'];
        if (System::validarImagem($imagem)){
            $logo = System::uploadImage($imagem);
        }
    }

    if (@$_FILES['background']['name'] != ''){
        $imagem = $_FILES['background'];
        if (System::validarImagem($imagem)){
            $backgroundImageMain = System::uploadImage($imagem);
        }else{
            echo "Erro";
        }
    }

    $items = array(
        'logo-header' => $logo,
        'background-image-main' => $backgroundImageMain,
        'color' => System::arrayToString($cor, '--!--'),
        'arrayWritter' => $_POST['writter-animation']
    );

    MySql::updateCMS($items);

    //header('Location:' . INCLUDE_PATH . 'dashboard');
}

*/
?>

<link rel="stylesheet" href="<?php echo PATH_ADMIN?>views/pages/home/style.css">
<div class="container-grid-home">

</div>
<script src="<?php echo ADMIN_SCRIPTS ?>cms.js"></script>