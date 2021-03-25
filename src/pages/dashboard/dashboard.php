<script src="<?php echo INCLUDE_PATH_PAGES ?>dashboard/dashboard.js"></script>
<script src="<?php echo INCLUDE_PATH_PAGES ?>dashboard/pages/chat-dashboard.js"></script>
<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAGES ?>dashboard/dashboard.css">

<section class="root">
    <div class="header-container">
        <?php include('./src/components/dashboard/header.php') ?>
    </div>
    <div class="aside-container">
        <?php include('./src/components/dashboard/aside.php') ?>
    </div>
    <div class="main-container"></div>
</section>