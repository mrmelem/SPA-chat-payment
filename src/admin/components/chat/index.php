<link rel="stylesheet" href="<?php echo ADMIN_STYLES ?>chat.css">
<section class="chat">
    <div class="wrapper">
        <i class="fas fa-comments"></i>
        <div class="pop-up hide">1</div>
    </div>
    <div class="chat-content">
        <div class="main-screen">
            <div class="user-profiles">
                <div class="user">
                    <div class="user-header">
                        <p>João</p>
                        <div class="pop-up-user"></div>
                    </div>
                    <div class="last-msg">
                        <p>Sim, esse é o seu projeto!</p>
                    </div>
                </div>
            </div>
            <div class="footer-profiles">
                <div class="wrapper mobile">
                    <i class="fa fa-times"></i>
                </div>
                <div class="wrapper desktop">
                    <i class="fa fa-times"></i>
                </div>
            </div>
        </div>
        <div class="msg-screen">
            <div class="header">
                <div class="return"><i class="fas fa-reply"></i></div>
                <div class="username">Pedro Henrique dos Anjos Melém</div>
            </div>
            <div class="msg-group">

                <p class="msg">Oi</p>
                <p class="msg out">Olá!</p>


            </div>
            <div class="chat-input">
                <textarea class="noOverflow" id="input-msg" cols="60" rows="1" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)"></textarea>
                <button type="submit" id="btn-msg"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

</section>