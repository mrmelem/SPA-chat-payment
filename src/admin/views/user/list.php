<?php
$data = MySql::selectAll('tb_users');

?>


<link rel="stylesheet" href="<?php echo ADMIN_STYLES ?>index.css">
<link rel="stylesheet" href="<?php echo PATH_ADMIN ?>views/pages/home/style.css">

<div class="container">
    <h1>Usuários</h1>

    <table>
        <tr class="FirstRow">
            <td>Nome</td>
            <td class="TextAlignCenter">Última atividade</td>
            <td class="TextAlignCenter">Editar</td>
            <td class="TextAlignCenter">Excluir</td>
        </tr>
        <?php foreach ($data as $key => $value) { ?>
            <tr>
                <td>
                    <?php echo $value['user'] ?>
                </td>

                <td class="TextAlignCenter">
                    <?php echo $value['last'] ?>
                </td>

                <td class="TextAlignCenter">
                    <a href="?action=edit&id=<?php echo $value['ref'] ?>">
                        <i class="fas fa-pen"></i>
                    </a>
                </td>
                <td class="TextAlignCenter">
                    <a href="?action=delete&id=<?php echo $value['ref'] ?>">
                        <i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>

    
</div>