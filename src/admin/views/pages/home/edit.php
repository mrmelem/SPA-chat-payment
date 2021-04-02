<?php
if (isset($_GET['service'])) {
    $data = MySql::selectByToken('tb_services', $_GET['service']);
    if (count($data) == 0) {
        header('Location:' . INCLUDE_PATH . 'dashboard/pages?ref=' . $_GET['ref']);
    } else {
        $data = $data[0];
        $id = $data['id'];
        $token = $_GET['service'];
        $table = 'tb_services';
        $img = $data['image'];
    }
}

if (isset($_GET['work'])) {
    $data = MySql::selectByToken('tb_works', $_GET['work']);
    if (count($data) == 0) {
        header('Location:' . INCLUDE_PATH . 'dashboard/pages?ref=' . $_GET['ref']);
    } else {
        $data = $data[0];
        $id = $data['id'];
        $token = $_GET['work'];
        $table = 'tb_works';
        $img = $data['image'];
    }
}

if (isset($_POST['acao'])) {

    if ($_FILES['logo']['name'] != '') {
        $img = $_FILES['logo'];
        if (System::validarImagem($img)) {
            $img = System::uploadImage($img);
        }
    }
    $items = array(
        'token' => $token,
        'titulo' => $_POST['titulo'],
        'descricao' => $_POST['descricao'],
        'image' => $img
    );

    if (MySql::updateById($table, $id, $items)) {
        header('Location:' . INCLUDE_PATH . 'dashboard/pages?ref=' . $_GET['ref']);
    }
}

if (isset($_POST['confirm'])) {
    if (MySql::deleteById($table, $token)) {
        header('Location:' . INCLUDE_PATH . 'dashboard/pages?ref=' . $_GET['ref']);
    } else {
        die('Erro');
    }
}

if (isset($_POST['reject'])) {
    header('Location:' . INCLUDE_PATH . 'dashboard/pages?ref=' . $_GET['ref']);
}

if (isset($_POST['add-service'])) {
    if ($_FILES['background']['name'] != '') {
        $imagem = $_FILES['background'];
        if (System::validarImagem($imagem)) {
            $imagem = System::uploadImage($imagem);
        }
    } else {
        $imagem = null;
    }

    $items = array(
        'token' => uniqid(),
        'titulo' => $_POST['titulo'],
        'descricao' => $_POST['descricao'],
        'image' => $imagem
    );

    MySql::insert('tb_services', $items);
    header('Location:' . INCLUDE_PATH . 'dashboard/pages?ref=' . $_GET['ref']);
}

if (isset($_POST['add-work'])) {
    if ($_FILES['background']['name'] != '') {
        $imagem = $_FILES['background'];
        if (System::validarImagem($imagem)) {
            $imagem = System::uploadImage($imagem);
        }
    } else {
        $imagem = null;
    }

    $items = array(
        'token' => uniqid(),
        'titulo' => $_POST['titulo'],
        'descricao' => $_POST['descricao'],
        'image' => $imagem
    );

    MySql::insert('tb_works', $items);
    header('Location:' . INCLUDE_PATH . 'dashboard/pages?ref=' . $_GET['ref']);
}
?>

<link rel="stylesheet" href="<?php echo PATH_ADMIN ?>views/pages/home/style.css">
<?php if (isset($_GET['action']) && $_GET['action'] == 'del') { ?>
    <div class="container">
        <form method="POST">
            <div class="edit">
                <h1>Excluir serviço</h1>

                <p>Título: <?php echo $data['titulo'] ?></p>
                <p>Descrição: <?php echo $data['descricao'] ?></p>

                <div class="btn">
                    <input type="submit" name="confirm" value="Excluir">
                    <input type="submit" name="reject" value="Cancelar" class="cancel">
                </div>
            </div>
        </form>
    </div>
<?php } else if (isset($_GET['action']) && $_GET['action'] == 'add-work') { ?>
    <div class="container">
        <h1>Novo Produto</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="edit">
                <div class="content">
                    <label for="titulo">Título: </label>
                    <textarea type="text" id="titulo" name="titulo"></textarea>
                </div>

                <div class="content">
                    <label for="descricao">Descrição: </label>
                    <textarea type="text" id="descricao" name="descricao" rows="5"></textarea>
                </div>

                <div class="content img">
                    <div class="image-header">
                        <label class="inputFile" for="logo-image"><i class="fas fa-upload"></i> Adicionar foto</label>
                        <input type="file" name="background" id="logo-image" accept="image/png, image/jpeg, image/jpg">
                    </div>
                </div>

                <div class="content img">
                    <div class="image-preview">
                        <label for="logo-preview" id="label-logo">Você ainda não adicionou uma imagem</label>
                        <img src="" id="logo-preview">
                    </div>
                </div>

                <div class="w100 btn">
                    <input type="submit" name="add-work" value="Salvar">
                </div>
            </div>
        </form>
    </div>
<?php } else if (isset($_GET['action']) && $_GET['action'] == 'add-service') { ?>
    <div class="container">
        <h1>Cadastrar novo serviço</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="edit">
                <div class="content">
                    <label for="titulo">Título: </label>
                    <textarea type="text" id="titulo" name="titulo"></textarea>
                </div>

                <div class="content">
                    <label for="descricao">Descrição: </label>
                    <textarea type="text" id="descricao" name="descricao" rows="5"></textarea>
                </div>

                <div class="content img">
                    <div class="image-header">
                        <label class="inputFile" for="logo-image"><i class="fas fa-upload"></i> Adicionar foto</label>
                        <input type="file" name="background" id="logo-image" accept="image/png, image/jpeg, image/jpg">
                    </div>
                </div>

                <div class="content img">
                    <div class="image-preview">
                        <label for="logo-preview" id="label-logo">Você ainda não adicionou uma imagem</label>
                        <img src="" id="logo-preview">
                    </div>
                </div>

                <div class="w100 btn">
                    <input type="submit" name="add-service" value="Salvar">
                </div>
            </div>
        </form>
    </div>

<?php } else { ?>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <div class="edit">
                <div class="content">
                    <label for="titulo">Título: </label>
                    <textarea type="text" id="titulo" name="titulo"><?php echo $data['titulo'] ?></textarea>
                </div>

                <div class="content">
                    <label for="descricao">Descrição: </label>
                    <textarea type="text" id="descricao" name="descricao" rows="5"><?php echo $data['descricao'] ?></textarea>
                </div>

                <div class="content img">
                    <div class="image-header">
                        <label class="inputFile" for="logo-image"><i class="fas fa-upload"></i> Adicionar foto</label>
                        <input type="file" name="logo" id="logo-image" accept="image/png, image/jpeg, image/jpg">
                    </div>
                </div>

                <div class="content img">
                    <div class="image-preview">
                        <?php if (file_exists('src/public/assets/' . $data['image']) && $data['image'] !== '') { ?>
                            <label for="logo-preview" id="label-logo">Imagem Atual</label>
                            <img src="<?php echo INCLUDE_PATH ?>src/public/assets/<?php echo $data['image'] ?>" id="logo-preview">
                        <?php } else { ?>
                            <label for="logo-preview" id="label-logo">Você ainda não adicionou uma imagem</label>
                            <img src="" id="logo-preview">
                        <?php } ?>
                    </div>
                </div>

                <div class="w100 btn">
                    <input type="submit" name="acao" value="Salvar">
                </div>
            </div>
        </form>
    </div>
<?php } ?>
<script src="<?php echo ADMIN_SCRIPTS ?>cms.js"></script>