<link rel="stylesheet" href="<?php echo PUBLIC_STYLES ?>home.css">


<div class="chat">
    <div class="chat-container">
        <div class="chat-title">
            <b>Chat</b>
        </div>
        <div class="content">
            <div class="chat-container-message" id="chat"></div>
            <form>
                <div class="chat-input">
                    <textarea class="noOverflow" id="input-msg" cols="60" rows="1" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)"></textarea>
                    <button type="submit" id="btn-msg"><i class="fas fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="home-content">
    <main>
        <nav>
            <div class="center">
                <div class="logo">
                    <img src="<?php echo INCLUDE_PATH ?>src/public/assets/logo.jfif" alt="Simpliart">
                </div>
            </div>
        </nav>
        <section class="main-banner">
            <div class="main-content">
                <p>
                    <span class="typed-text"></span>
                    <span class="cursor"></span>
                </p>
                <div class="icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-btn center-1080">
            <p>Voltar ao topo</p>
            <a href="<?php echo INCLUDE_PATH ?>login">Login</a>
        </div>
        <p>Todos os direitos reservados!</p>
        <p class="ad">Site desenvolvido por <a href="#">Pedro Melém</a></p>
    </footer>
</div>

<script src="<?php echo PUBLIC_SCRIPTS ?>tWritter.js"></script>
<script src="<?php echo PUBLIC_SCRIPTS ?>home.js"></script>
<script src="<?php echo PUBLIC_SCRIPTS ?>chat-home.js"></script>