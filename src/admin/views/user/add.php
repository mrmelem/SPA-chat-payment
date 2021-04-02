<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'edit' || $_GET['action'] == 'delete') {
        if (MySql::checkByRef('tb_users', $_GET['id'])) {
            $data = MySql::selectByRef('tb_users', $_GET['id'])[0];
        } else {
            header('Location:' . INCLUDE_PATH . 'dashboard/user');
        }
    }
} else {
    header('Location:' . INCLUDE_PATH . 'dashboard/user');
}

if (isset($_POST['confirm'])) {
    if ($data['user'] != 'root') {
        if (MySql::deleteById('tb_users', $data['id'])) {
            header('Location:' . INCLUDE_PATH . 'dashboard/user');
        } else {
            die('Erro');
        }
    } else {
        die('O usuário root não pode ser deletado');
    }
}

if (isset($_POST['reject'])) {
    header('Location:' . INCLUDE_PATH . 'dashboard/user');
}
if (isset($_POST['edit'])){
    // Verificar se houve alteração de senha
    // Se houver, verificar senha atual pra ver se tem autorização
    // Se houver, validar as duas senhas e verifiicar se contém os requisitos de 8 letras
    // Caso nao haja alteração, salvar novas informações
}
?>

<link rel="stylesheet" href="<?php echo PATH_ADMIN ?>views/pages/home/style.css">

<div class="container">
    <?php if ($_GET['action'] == 'edit') { ?>
        <h1>Editar</h1>
        <form method="post">
            <input type="text" name="name" value="<?php echo $data['user'] ?>" placeholder="Nome de usuário"><br />
            <input type="email" name="email" value="<?php echo $data['email'] ?>" placeholder="Email"><br />
            <input type="password" name="password" placeholder="Senha atual"><br />
            <p class="description">Sua senha deve conter pelo menos 8 caracteres.</p>
            <input type="password" name="new-password" placeholder="Nova senha"><br />
            <input type="password" name="confirm-password" placeholder="Repita sua nova senha"><br />
            <div class="btn">
                <input type="submit" name="edit" value="Salvar">
            </div>
        </form>
    <?php } else { ?>
        <form method="post">
            <h1>Desligamento</h1>
            <p>O seguinte usuário será desligado quadro</p>
            <p>Usuário: <?php echo $data['user'] ?></p>
            <p>E-mail: <?php echo $data['email'] ?></p>
            <p><?php echo $data['id'] ?></p>
            <div class="btn">
                <input type="submit" name="confirm" value="Excluir">
                <input type="submit" name="reject" value="Cancelar" class="cancel">
            </div>
        </form>
    <?php } ?>
</div>