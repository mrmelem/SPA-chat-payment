<link rel="stylesheet" href="<?php echo ADMIN_STYLES ?>main.css">
<link rel="stylesheet" href="<?php echo PATH_ADMIN ?>views/home/style.css">
<?php include('./src/admin/components/dashboard/header/index.php') ?>
<?php include('./src/admin/components/dashboard/aside/index.php') ?>


<main>
    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'new' || $_GET['action'] == 'edit' || $_GET['action'] == 'delete') {
            if (file_exists('src/admin/views/user/add.php')) {
                include('src/admin/views/user/add.php');
            } else {
                echo "Erro";
            }
        }
    } else {
        if (file_exists('src/admin/views/user/list.php')) {
            include('src/admin/views/user/list.php');
        } else {
            echo "Erro";
        }
    }
    ?>
</main>



<script src="<?php echo ADMIN_SCRIPTS ?>dashboard.js"></script>
<script src="<?php echo ADMIN_SCRIPTS ?>chat-dashboard.js"></script>