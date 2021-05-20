<?php
$color = Styles::Color();
?>

<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>src/public/components/footer/style.css">

<style>
    footer {
        background-color: <?php echo $color['cor1'] ?>;
    }
</style>
<footer>
    <div class="footer-btn center-1080">
        <p>Voltar ao topo</p>
        <a href="<?php echo INCLUDE_PATH ?>login">Login</a>
    </div>
    <p>Todos os direitos reservados!</p>
    <p class="ad">Site desenvolvido por <a href="#">Pedro Melém</a></p>
</footer>