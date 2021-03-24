$(() => {
    $('form').on('submit', function () {
        event.preventDefault()
        sendMessage()
    })
    function sendMessage() {
        let msg = $('#input-msg').val();
        if (msg !== '') {
            var el = $("#chat")
            var height = el.prop('scrollHeight')
            el.animate({scrollTop: height }, '0');
            $('.chat-container-message').append(`<div class="received msg"><p>` + msg + `</p></div>`)
        }
        $('#input-msg').val('');
    }

    $(document).keypress(function (e) {
        if (e.which === 13) {
            event.preventDefault()
            sendMessage()
        }
    })

})

function auto_grow(element) {
    element.style.height = '5px'
    element.style.height = (element.scrollHeight) + "px";
    if (element.scrollHeight > 111) {
        $(() => {
            $('.chat-input textarea').addClass('overflow')
            $('.chat-input textarea').removeClass('noOverflow')
        })
    } else {
        $(() => {
            $('.chat-input textarea').addClass('noOverflow')
            $('.chat-input textarea').removeClass('overflow')
        })
    }
}







