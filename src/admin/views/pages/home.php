<?php
$home = MySql::selectAll('tb_home');
$services = MySql::selectAll('tb_services');
$works = MySql::selectAll(('tb_works'));
$home = $home['0'];
$writer = explode('--!--', $home['content']);


function arrayToString($array)
{
    $string = "";
    for ($i = 1; $i <= count($array); $i++) {
        $string .= $array[$i - 1];
        if ($i != count($array)) {
            $string .= ', ';
        }
    }
    return $string;
}


if (isset($_POST['acao'])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<link rel="stylesheet" href="<?php echo ADMIN_STYLES ?>home.css">

<div class="container-home">
    <form method="post">

        <h1>Imagens</h1>
        <div class="content-home">
            <div class="w50">
                <div class="image-header">
                    <label class="inputFile" for="logo-image"><i class="fas fa-upload"></i> Logo</label>
                    <input type="file" name="logo" id="logo-image" accept="image/png">
                    <p class="description">Apenas imagens com extensões PNG</p>
                </div>
                <div class="image-preview">
                    <label for="logo-preview">Pré-visualização</label>
                    <img src="" id="logo-preview">
                </div>
            </div>
            <div class="w50">
                <div class="image-header">
                    <label class="inputFile" for="background-image"><i class="fas fa-upload"></i> Imagem Principal</label>
                    <input type="file" name="background" id="background-image" accept="image/jpeg, image/png, image/jpg">
                </div>
                <div class="image-preview">
                    <label for="background-preview">Pré-visualização</label>
                    <img src="" id="background-preview">
                </div>
            </div>
        </div>

        <h1>Cores</h1>
        <div class="content-home cor">

            <div class="color-picker-wrapper">
                <p class="color-title">Primária</p>
                <div class="inputs-color">
                    <input type="color" value="#ff0000" id="color-picker1" class="inputColor">
                    <input type="text" class="color-text" placeholder="#" name="cor_primaria">
                </div>
            </div>

            <div class="color-picker-wrapper">
                <p class="color-title">Secundária</p>
                <div class="inputs-color">
                    <input type="color" value="#ff0000" id="color-picker2" class="inputColor">
                    <input type="text" class="color-text" placeholder="#" name="cor_secundaria">
                </div>
            </div>

            <div class="color-picker-wrapper">
                <p class="color-title">Destaques</p>
                <div class="inputs-color">
                    <input type="color" value="#ff0000" id="color-picker3" class="inputColor">
                    <input type="text" class="color-text" placeholder="#" name="cor_terciaria">
                </div>
            </div>
        </div>

        <h1>Textos</h1>
        <div class="content-home">
            <div class="group-text">
                <div class="group-input">
                    <label for="Writter">Banner principal: </label>
                    <textarea name="writter-animation" id="Writter" cols="60" rows="3"><?php echo arrayToString($writer); ?></textarea>
                </div>
                <p class="description">Cada item é separado por <b>,</b> (vírgula). Para deixar sem aninamação, basta colocar apenas 1 item.</p>
            </div>
        </div>

        <div class="w100 btn">
            <input type="submit" name="acao" value="Salvar">
        </div>
    <div class="clear"></div>
    </form>
</div>

<div class="container-home">
    
</div>
<!--
<div class="container-home">
    <h1>Serviços prestados</h1>
    <table>
        <tr class="FirstRow">
            <td>Título</td>
            <td>Descrição</td>
            <td>Foto</td>
            <td class="TextAlignCenter">Editar</td>
            <td class="TextAlignCenter">Excluir</td>
        </tr>
        <?php foreach ($services as $key => $value) { ?>
            <tr>
                <td><?php echo $value['nome'] ?></td>
                <td><?php echo $value['descricao'] ?></td>
                <td></td>
                <td class="TextAlignCenter">
                    <a href="<?php echo INCLUDE_PATH ?>dashboard/pages?ref=home&service=<?php echo $value['id'] ?>">
                        <i class="fas fa-pen"></i>
                    </a>
                </td>
                <td class="TextAlignCenter">
                    <a href="<?php echo INCLUDE_PATH ?>dashboard/pages?ref=home&service-del=<?php echo $value['id'] ?>">
                        <i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <button>Adicionar novo</button>
</div>
        -->

<script src="<?php echo ADMIN_SCRIPTS ?>cms.js"></script>
