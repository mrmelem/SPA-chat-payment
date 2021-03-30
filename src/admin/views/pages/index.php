<link rel="stylesheet" href="<?php echo ADMIN_STYLES ?>dashboard.css">
<section class="root">
    <div class="chat">
        <?php include('./src/admin/components/chat/index.php') ?>
    </div>
    <div class="header-container">
        <?php include('./src/admin/components/dashboard/header.php') ?>
    </div>
    <div class="aside-container">
        <?php include('./src/admin/components/dashboard/aside.php') ?>
    </div>

    <div class="main-container">

        <?php
        if (isset($_GET['ref'])) {
            if (file_exists('src/admin/views/pages/' . $_GET['ref'] . '.php')) {
                include('src/admin/views/pages/' . $_GET['ref'] . '.php');
            } else {
                header("Location:" . INCLUDE_PATH . 'dashboard/pages');
            }
        } else {
        ?>

        <?php
        }
        ?>
    </div>

</section>



<script src="<?php echo ADMIN_SCRIPTS ?>dashboard.js"></script>
<script src="<?php echo ADMIN_SCRIPTS ?>chat-dashboard.js"></script>