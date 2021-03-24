<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAGES ?>home/home.css">

<script src="<?php echo INCLUDE_PATH_PAGES ?>home/home.js"></script>
<script src="<?php echo INCLUDE_PATH_PAGES ?>home/chat-home.js"></script>

<div class="chat">
    <div class="chat-icon">
        <i class="fas fa-comment"></i>
    </div>

    <div class="chat-container">
        <div class="content">
            <div class="chat-title">
                <b>Chat</b>
            </div>
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