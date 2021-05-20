<link rel="stylesheet" href="<?php echo PATH_ADMIN ?>components/dashboard/aside/style.css">

<aside>
    <div class="content">
        <div class="aside-title">
            <a class="nav" href="<?php echo INCLUDE_PATH ?>dashboard">
                <p><i class="fa fa-home"></i></p>
            </a>
        </div>
        <div class="aside-content">

            <div class="aside-group">
                <div class="aside-group-title">
                    <i class="fas fa-box"></i>
                    <p>Serviços</p>
                    <i class="rot fas fa-chevron-up"></i>
                </div>
                <div class="aside-group-list">
                    <a class="nav" href="<?php echo INCLUDE_PATH ?>dashboard/orders">Pedidos</a>
                </div>
            </div>

            <div class="aside-group">
                <div class="aside-group-title">
                    <i class="fas fa-file"></i>
                    <p>Painel - CMS</p>
                    <i class="rot fas fa-chevron-up"></i>
                </div>
                <div class="aside-group-list">
                    <a class="nav" href="<?php echo INCLUDE_PATH ?>dashboard/pages?ref=home">Home</a>
                    <a class="nav" href="<?php echo INCLUDE_PATH ?>dashboard/pages?ref=chat">Chat</a>
                </div>
            </div>

            <div class="aside-group">
                <div class="aside-group-title">
                    <i class="fas fa-user"></i>
                    <p>Usuários</p>
                    <i class="rot fas fa-chevron-up"></i>
                </div>
                <div class="aside-group-list">
                    <a class="nav" href="<?php echo INCLUDE_PATH ?>dashboard/user">Gerenciar permissões</a>
                </div>
            </div>

        </div>
        <div class="aside-footer">
        </div>
    </div>
</aside>