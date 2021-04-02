<?php
$data = MySql::selectAll('tb_orders');
function currentMoney($price)
{
    return number_format($price, 2, ',', '.');
}
?>

<link rel="stylesheet" href="<?php echo PATH_ADMIN ?>views/pages/home/style.css">

<div class="container">
    <div class="container-header">
        <h1>Novos Pedidos </h1>
        <div class="pag">

        </div>
    </div>
    <?php if (count($data) !== 0) { ?>
        <table class="maxWidth">
            <tr class="FirstRow">
                <td>cod</td>
                <td>Cliente</td>
                <td>Entrada</td>
                <td>Prazo</td>
                <td>Preço</td>
                <td class="TextAlignCenter">Situação</td>
                <td class="TextAlignCenter">Link</td>
                <td class="TextAlignCenter">Editar</td>
            </tr>

            <?php foreach ($data as $key => $value) { ?>
                <tr class="dataRow">
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['client'] ?></td>
                    <td><?php echo date('d/m/y', $value['dateIn']) ?></td>
                    <td><?php echo date('d/m/y', $value['dateOut']) ?></td>
                    <td><?php echo "R$ " . currentMoney($value['price'] / 100) ?></td>
                    <td class="TextAlignCenter"><?php echo $value['content'] ?></td>
                    <td class="TextAlignCenter"><i class="fas fa-share-alt" h="<?php echo $value['id'] ?>"></i></td>
                    <td class="TextAlignCenter"><a href="<?php echo INCLUDE_PATH ?>dashboard/orders?action=edit&id=<?php echo $value['token'] ?>"><i class="fa fa-pen"></i></a></td>
                </tr>
                <tr class="tokenRow" h="<?php echo $value['id'] ?>">
                    <td class="TextAlignCenter tokenH" colspan="8">Link: <a href="<?php echo INCLUDE_PATH . 'orders/' . $value['token'] ?>"><?php echo INCLUDE_PATH . 'orders/' .  $value['token'] ?></a></td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <table>
            <p>Você não tem serviços em andamento</p>
        </table>
    <?php } ?>
    <a class="btn-new" href="<?php echo INCLUDE_PATH ?>dashboard/orders?action=new">Adicionar novo</a>
</div>

<script src="<?php echo ADMIN_SCRIPTS ?>orders.js"></script>