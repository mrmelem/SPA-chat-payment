<link rel="stylesheet" href="<?php echo INCLUDE_PATH?>src/public/components/chat/style.css">

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

<script src="<?php echo INCLUDE_PATH?>src/public/components/chat/script.js"></script>