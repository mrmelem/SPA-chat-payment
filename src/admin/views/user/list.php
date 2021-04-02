<?php?>


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
        <tr>
            <td>Pedro</td>

            <td class="TextAlignCenter">Online</td>
            <td class="TextAlignCenter">
                <a href="?action=edit">
                    <i class="fas fa-pen"></i>
                </a>
            </td>
            <td class="TextAlignCenter">
                <a href="?action=del&token">
                    <i class="fa fa-times"></i>
                </a>
            </td>
        </tr>
    </table>
    <a class="btn-new" href="?action=new">Adicionar novo</a>
</div>