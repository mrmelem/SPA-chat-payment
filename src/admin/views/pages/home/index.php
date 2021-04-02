<?php
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


?>

<link rel="stylesheet" href="<?php echo PATH_ADMIN?>views/pages/home/style.css">

<div class="container">
    <form method="post" enctype="multipart/form-data">

        <h1>Imagens</h1>
        <div class="content">
            <div class="w50">
                <div class="image-header">
                    <label class="inputFile" for="logo-image"><i class="fas fa-upload"></i> Logo</label>
                    <input type="file" name="logo" id="logo-image" accept="image/png">
                    <p class="description">Apenas imagens com extensões PNG</p>
                </div>
                <div class="image-preview">
                    <label for="logo-preview" id="label-logo">Imagem atual</label>
                    <img src="<?php echo INCLUDE_PATH ?>src/public/assets/<?php echo $logo ?>" id="logo-preview">
                </div>
            </div>
            <div class="w50">
                <div class="image-header">
                    <label class="inputFile" for="background-image"><i class="fas fa-upload"></i> Imagem Principal</label>
                    <input type="file" name="background" id="background-image" accept="image/jpeg, image/png, image/jpg">
                </div>
                <div class="image-preview">
                    <label for="background-preview" id="label-background">Imagem atual</label>
                    <img src="<?php echo INCLUDE_PATH ?>src/public/assets/<?php echo $backgroundImageMain ?>" id="background-preview">
                </div>
            </div>
        </div>

        <h1>Cores</h1>
        <div class="content cor">
            <div class="color-picker-wrapper">
                <input type="color" value="<?php echo $colorArr['cor1'] ?>" id="color-picker1" class="inputColor">
                <input type="text" class="color-text" placeholder="#" name="primeiraCor" value="<?php echo $colorArr['cor1'] ?>">
                <p class="color-title">Topo e rodapé</p>
            </div>

            <div class="color-picker-wrapper">
                <input type="color" value="<?php echo $colorArr['cor2'] ?>" id="color-picker2" class="inputColor">
                <input type="text" class="color-text" placeholder="#" name="segundaCor" value="<?php echo $colorArr['cor2'] ?>">
                <p class="color-title">Letras</p>
            </div>

            <div class="color-picker-wrapper">
                <input type="color" value="<?php echo $colorArr['cor3'] ?>" id="color-picker3" class="inputColor">
                <input type="text" class="color-text" placeholder="#" name="terceiraCor" value="<?php echo $colorArr['cor3'] ?>">
                <p class="color-title">Sessão principal</p>
            </div>

            <div class="color-picker-wrapper">
                <input type="color" value="<?php echo $colorArr['cor4'] ?>" id="color-picker4" class="inputColor">
                <input type="text" class="color-text" placeholder="#" name="quartaCor" value="<?php echo $colorArr['cor4'] ?>">
                <p class="color-title">Sessão de serviços</p>
            </div>

            <div class="color-picker-wrapper">
                <input type="color" value="<?php echo $colorArr['cor5'] ?>" id="color-picker5" class="inputColor">
                <input type="text" class="color-text" placeholder="#" name="quintaCor" value="<?php echo $colorArr['cor5'] ?>">
                <p class="color-title">Sessão de trabalhos</p>
            </div>
        </div>

        <h1>Textos</h1>
        <div class="content text">
            <div class="group-text">
                <div class="group-input">
                    <label for="Writter">Banner principal: </label>
                    <textarea name="writter-animation" id="Writter" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)"><?php echo System::arrayToString($writer, ', ') ?></textarea>
                </div>
                <p class="description">Cada item é separado por <b>,</b> (vírgula). Para deixar sem aninamação, basta colocar apenas 1 item.</p>
            </div>
        </div>

        <div class="w100 btn">
            <input type="submit" name="acao" value="Salvar">
        </div>

    </form>
</div>

<div class="container">
    <h1>Serviços prestados</h1>
    <?php if (count($services) !== 0) { ?>
        <table>
            <tr class="FirstRow">
                <td>Título</td>
                <td>Descrição</td>
                <td class="TextAlignCenter">Editar</td>
                <td class="TextAlignCenter">Excluir</td>
            </tr>
            <?php foreach ($services as $key => $value) { ?>
                <tr>
                    <td><?php echo $value['titulo'] ?></td>
                    <td><?php echo $value['descricao'] ?></td>
                    <td class="TextAlignCenter">
                        <a href="<?php echo INCLUDE_PATH ?>dashboard/pages?ref=home&service=<?php echo $value['token'] ?>">
                            <i class="fas fa-pen"></i>
                        </a>
                    </td>
                    <td class="TextAlignCenter">
                        <a href="<?php echo INCLUDE_PATH ?>dashboard/pages?ref=home&service=<?php echo $value['token'] ?>&action=del">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
    <a class="btn-new" href="<?php echo INCLUDE_PATH?>dashboard/pages?ref=home&action=add-service">Adicionar novo</a>
</div>

<div class="container">
    <h1>Seus trabalhos</h1>
    <?php if (count($works) !== 0) { ?>
        <table>
            <tr class="FirstRow">
                <td>Título</td>
                <td>Descrição</td>
                <td class="TextAlignCenter">Editar</td>
                <td class="TextAlignCenter">Excluir</td>
            </tr>
            <?php foreach ($works as $key => $value) { ?>
                <tr>
                    <td><?php echo $value['titulo'] ?></td>
                    <td><?php echo $value['descricao'] ?></td>
                    <td class="TextAlignCenter">
                        <a href="<?php echo INCLUDE_PATH ?>dashboard/pages?ref=home&work=<?php echo $value['token'] ?>">
                            <i class="fas fa-pen"></i>
                        </a>
                    </td>
                    <td class="TextAlignCenter">
                        <a href="<?php echo INCLUDE_PATH ?>dashboard/pages?ref=home&work=<?php echo $value['token'] ?>&action=del">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
    <a class="btn-new" href="<?php echo INCLUDE_PATH?>dashboard/pages?ref=home&action=add-work">Adicionar novo</a>
</div>

<script src="<?php echo ADMIN_SCRIPTS ?>cms.js"></script>