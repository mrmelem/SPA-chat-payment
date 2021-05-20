<?php
$background = Styles::background('home');

?>

<link rel="stylesheet" href="<?php echo GLOBAL_STYLE ?>">
<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>src/public/views/home/style.css">

<header>
    <?php include('./src/public/components/header/index.php') ?>
</header>

<style>
    main {
        background-image: url("<?php echo INCLUDE_PATH ?>src/public/assets/<?php echo $background ?>");
    }

    main .overlay {
        background-color: rgba(0, 0, 0, 0.8);
    }

    main .container .icone i {
        color: white;
        font-size: 26px;
    }

    main .container .wanimation {
        font-family: "Montserrat", sans-serif;
        font-size: 32px;
        color: white;
    }

    .services {
        background-color: white;

    }

    .services .container .service-single {
        background-color: #ccc;
        font-family: "Montserrat", sans-serif;
    }

    .services .container .service-single .content .title {
        font-size: 23px;
        color: black;
    }

    .services .container .service-single .content .description {
        font-weight: normal;
        font-size: 16px;
        color: #575757;
    }

    .portfolio {
        background-color: #ccc;
    }

    .portfolio .container .container-single .content .title {
        font-size: 25px;
    }

    .portfolio .container .container-single .content .description {
        font-size: 16px;
    }

    .section-title {
        font-family: "Montserrat", sans-serif;
        font-size: 26px;
        color: black;
    }
</style>

<main>
    <div class="overlay"></div>
    <div class="container">
        <div class="icone">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
        </div>
        <div class="wanimation">
            <p>
                <span class="typed-text animation-title">Teste</span>
                <span class="cursor"></span>
            </p>
        </div>
    </div>

</main>
<section class="services">
    <h2 class="section-title">Serviços</h2>
    <div class="container">

        <div class="service-single">
            <div class="icone">
                <i class="fas fa-users"></i>
            </div>
            <div class="content">
                <h3 class="title">Titulo</h3>
                <h4 class="description">descrição</h4>
            </div>
        </div>
        <div class="service-single">
            <div class="icone">
                <i class="fas fa-users"></i>
            </div>
            <div class="content">
                <h3 class="title">Titulo</h3>
                <h4 class="description">descrição</h4>
            </div>
        </div>
        <div class="service-single">
            <div class="icone">
                <i class="fas fa-users"></i>
            </div>
            <div class="content">
                <h3 class="title">Titulo</h3>
                <h4 class="description">descrição</h4>
            </div>
        </div>
        <div class="service-single">
            <div class="icone">
                <i class="fas fa-users"></i>
            </div>
            <div class="content">
                <h3 class="title">Titulo</h3>
                <h4 class="description">descrição</h4>
            </div>
        </div>

    </div>
</section>
<section class="portfolio">
    <h2 class="section-title">Portfólio</h2>
    <div class="container">
        <div class="container-single">
            <div class="imagem">
                <img src="#" alt="">
            </div>
            <div class="content">
                <h2 class="title">Titulo</h2>
                <h4 class="description">descrição</h4>
            </div>
        </div>
        <div class="container-single">
            <div class="imagem">
                <img src="#" alt="">
            </div>
            <div class="content">
                <h2 class="title">Titulo</h2>
                <h4 class="description">descrição</h4>
            </div>
        </div>
        <div class="container-single">
            <div class="imagem">
                <img src="#" alt="">
            </div>
            <div class="content">
                <h2 class="title">Titulo</h2>
                <h4 class="description">descrição</h4>
            </div>
        </div>
    </div>
</section>

</body>

<footer>
    <?php include('./src/public/components/footer/index.php') ?>
</footer>

<script src="<?php echo PUBLIC_SCRIPTS ?>tWritter.js"></script>