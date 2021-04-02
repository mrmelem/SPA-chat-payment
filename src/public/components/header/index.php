<?php
$data = MySql::selectAll('tb_home');

foreach ($data as $key => $value) {
    if ($value['container'] == 'color') {
        $color = $value['content'];
    }
    if ($value['container'] == 'logo-header') {
        $logo = $value['content'];
        $color = explode("--!--", $color);
        foreach ($color as $key => $value) {
            $itens = explode('-->', $value);
            $style[$itens[0]] = $itens[1];
        }
    }
}

?>
<link rel="stylesheet" href="<?php echo GLOBAL_STYLE ?>">
<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>src/public/components/header/style.css">
<nav>
    <div class="center">
        <div class="logo">
            <img src="<?php echo INCLUDE_PATH ?>src/public/assets/<?php echo $logo ?>" alt="Simpliart">
        </div>
    </div>
</nav>