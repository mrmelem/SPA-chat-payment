<?php

if (isset($_GET['action']) && $_GET['action'] == 'edit') {
    $data = MySql::selectByToken('tb_orders', $_GET['id'])[0];
    $price = $data['price'] / 100;
    $price = number_format($price, 2, '.');
    $content = $data['content'];
}

if (isset($_POST['add-order'])) {

    $token = uniqid();
    $dateIn = strtotime(date('Y-m-d H:i:s'));
    $dateOut = strtotime($_POST['dateOut']);

    $items = array(
        'token' => $token,
        'client' => $_POST['client'],
        'price' => $_POST['price'] * 100,
        'dateIn' => $dateIn,
        'dateOut' => $dateOut,
        'sit' => 'Aguardando agamento'
    );

    MySql::insert('tb_orders', $items);
    header('Location:' . INCLUDE_PATH . 'dashboard/orders');
}

if (isset($_POST['edit-order'])) {
    $price = $_POST['price'] * 100;
    $items = array(
        'id' => $data['id'],
        'token' => $_GET['id'],
        'client' => $_POST['client'],
        'price' => $price,
        'dateIn' => $data['dateIn'],
        'dateOut' => strtotime($_POST['dateOut']),
        'content' => $_POST['sit'],
    );

    MySql::updateByToken('tb_orders', $data['id'], $items);
    header('Location:' . INCLUDE_PATH . 'dashboard/orders');
}
?>

<link rel="stylesheet" href="<?php echo ADMIN_STYLES ?>index.css">
<link rel="stylesheet" href="<?php echo PATH_ADMIN ?>views/pages/home/style.css">


<?php if ($_GET['action'] == 'new') { ?>
    <div class="container">
        <h1>Novo Pedido</h1>
        <form method="POST">
            <div class="edit">
                <div class="content">
                    <label for="titulo">Nome do cliente/empresa:</label>
                    <input type="text" name="client" required>
                </div>
                <div class="content">
                    <label for="titulo">Prazo: </label>
                    <input type="date" name="dateOut" required>
                </div>
                <div class="content">
                    <label for="titulo">Valor: </label>
                    <input type="number" name="price" required step="0.01">
                </div>

                <div class="w100 btn">
                    <input type="submit" name="add-order" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>
<?php } else if ($_GET['action'] == 'edit') { ?>
    <div class="container">
        <h1>Editar pedido</h1>
        <form method="POST">
            <div class="edit">
                <div class="content">
                    <label for="titulo">Nome do cliente/empresa:</label>
                    <input type="text" name="client" value="<?php echo $data['client'] ?>">
                </div>
                <div class="content">
                    <label for="dateOut">Prazo: </label>

                    <input type="date" id="dateOut" name="dateOut" value="<?php echo date('Y-m-d', $data['dateOut']) ?>">
                </div>
                <div class="content">
                    <label for="price">Valor: </label>
                    <input type="number" id="price" name="price" step="0.01" value="<?php echo $price ?>">
                </div>

                <div class="content box">
                    <label for="checklist">Situação do pedido:</label>
                    <div id="checklist">
                        <input type="radio" id="sit1" name="sit" value="Aguardando pagamento">
                        <label for="sit1">Aguardando pagamento</label></br>

                        <input type="radio" id="sit2" name="sit" value="Processando">
                        <label for="sit2">Processando</label></br>

                        <input type="radio" id="sit3" name="sit" value="Para entrega">
                        <label for="sit3">Para entrega</label></br>

                        <input type="radio" id="sit4" name="sit" value="Finalizado">
                        <label for="sit4">Finalizado</label></br>
                        <input id="sit" type="hidden" value="<?php echo $content ?>">
                    </div>
                </div>
                <div class="w100 btn">
                    <input type="submit" name="edit-order" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>
<?php } ?>


<script src="<?php echo ADMIN_SCRIPTS ?>orders.js"></script>