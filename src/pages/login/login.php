<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAGES ?>login/login.css">
<script src="<?php echo INCLUDE_PATH_PAGES ?>login/login.js"></script>

<section class="login">
    <div class="form">
        <b>
            <h2>Login</h2>
        </b>
        <form>
            <div class="input-container">
                <span><i class="fa fa-user"></i></span>
                <input type="text" id="login-name">
            </div>
            <!--Input-Container-->

            <div class="input-container">
                <span><i class="fas fa-key"></i></span>
                <input type="password" id="login-password">
            </div>
            <!--Input-Container-->
            <div class="input-checkbox-container">
                <input type="checkbox" id="setCookie">
                <span>Manter conectado</span>
            </div>
            <!--input-checkbox-container-->
            <div class="input-submit-container">
                <button id="login">Entrar
            </div>
            <!--Input-Submit-Container-->

            <hr>
            <div class="input-button-container">
                <button id="recovery">Esqueci minha senha</button>
            </div>
        </form>
    </div>
</section>