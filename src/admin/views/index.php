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
        <h1>Teste</h1>
    </div>
</section>

<div class="cms"></div>
<script src="<?php echo ADMIN_SCRIPTS ?>dashboard.js"></script>
<script src="<?php echo ADMIN_SCRIPTS ?>chat-dashboard.js"></script>