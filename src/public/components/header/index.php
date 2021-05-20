<?php
$style = Styles::Color();
$logo = Styles::Logo();
?>
<link rel="stylesheet" href="<?php echo GLOBAL_STYLE ?>">
<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>src/public/components/header/style.css">
<style>
    header{
        background-color: <?php echo $style['cor1'] ?>;
        max-height: 80px;
    }
</style>

<div class="container">
    <div class="logo">
        <img src="<?php echo INCLUDE_PATH ?>src/public/assets/<?php echo $logo ?>" alt="" type="imagens/transparent-logo/jpeg">
    </div>
    <nav>
        <ul>
            <li>Home</li>
            <li>Serviços</li>
            <li>Portfólio</li>
        </ul>
    </nav>
</div>