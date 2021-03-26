
<div class="container-group-2">
    <div class="container">
        <h1>Usuários</h1>
    </div>
    <div class="container">
        <h1>Pedidos</h1>
    </div>
</div>

<div class="chat">
    <div class="users">
        <div class="user-single select">
            <div class="notify on"></div>
            <p class="token"></p>
            <svg height="26px" width="26px" viewBox="-4 -4 24 24">
                <line stroke="black" stroke-linecap="round" stroke-width="2" x1="2" x2="14" y1="2" y2="14"></line>
                <line stroke="black" stroke-linecap="round" stroke-width="2" x1="2" x2="14" y1="14" y2="2"></line>
            </svg>
        </div>
    </div>
    <div class="container-chat">
        <div class="container-header"></div>
        <div class="container-msg"></div>
        <form>
            <div class="chat-input">
                <textarea placeholder="Digite sua mensagem..." class="noOverflow" id="input-msg" cols="60" rows="1" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)"></textarea>
                <button type="submit" id="btn-msg"><i class="fas fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</div>
