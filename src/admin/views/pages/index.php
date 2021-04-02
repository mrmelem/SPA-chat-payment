<link rel="stylesheet" href="<?php echo ADMIN_STYLES ?>main.css">
<link rel="stylesheet" href="<?php echo PATH_ADMIN ?>views/home/style.css">
<?php include('./src/admin/components/dashboard/header/index.php') ?>
<?php include('./src/admin/components/dashboard/aside/index.php') ?>

<main class="main-container">
    <?php
    if (isset($_GET['ref'])) {
        if (isset($_GET['service']) || isset($_GET['work']) || isset($_GET['action'])) {
            if (file_exists('src/admin/views/pages/' . $_GET['ref'] . '/edit.php')) {
                include('src/admin/views/pages/' . $_GET['ref'] . '/edit.php');
            } else {
                header("Location:" . INCLUDE_PATH . 'dashboard/pages?ref=' . $_GET['ref']);
            }
        } else {
            if (file_exists('src/admin/views/pages/' . $_GET['ref'] . '/index.php')) {
                include('src/admin/views/pages/' . $_GET['ref'] . './index.php');
            } else {
                header("Location:" . INCLUDE_PATH . 'dashboard/pages');
            }
        }
    } else {
    ?>
    
    <?php
    }
    ?>
</main>

<script src="<?php echo ADMIN_SCRIPTS ?>dashboard.js"></script>
<script src="<?php echo ADMIN_SCRIPTS ?>chat-dashboard.js"></script>