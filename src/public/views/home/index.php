<link rel="stylesheet" href="<?php echo GLOBAL_STYLE ?>">
<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>src/public/views/home/style.css">

<header>
    <?php include('./src/public/components/header/index.php') ?>
</header>

<section class="home-content">
    <main>
        <div class="main-banner">
            <div class="main-content">
                <p>
                    <span class="typed-text"></span>
                    <span class="cursor"></span>
                </p>
                <div class="icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </main>
</section>

<div class="chat">
    <?php include('./src/public/components/chat/index.php') ?>
</div>

<footer>
    <?php include('./src/public/components/footer/index.php') ?>
</footer>

<script src="<?php echo PUBLIC_SCRIPTS ?>tWritter.js"></script>