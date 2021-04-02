<?php
$data = MySql::selectAll('tb_home');

foreach ($data as $key => $value) {
    if ($value['container'] == 'color') {
        $color = $value['content'];
    }
}
?>

<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>src/public/components/footer/style.css">
<footer>
    <div class="footer-btn center-1080">
        <p>Voltar ao topo</p>
        <a href="<?php echo INCLUDE_PATH ?>login">Login</a>
    </div>
    <p>Todos os direitos reservados!</p>
    <p class="ad">Site desenvolvido por <a href="#">Pedro Melém</a></p>
</footer>