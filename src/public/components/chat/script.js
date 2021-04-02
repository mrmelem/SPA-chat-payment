$(() => {

    var socket = io('192.168.1.100:5000')
    var user = { src: 'client' }
    var chat = $('.content')

    chat.hide()
    $('.chat-title').click(function () {
        chat.slideToggle(500)
    })

    $('form').on('submit', function () {
        event.preventDefault()
        let msg = $('#input-msg').val()
        send(msg)
    })

    $(document).keypress(function (e) {
        if (e.which === 13) {
            event.preventDefault()
            let msg = $('#input-msg').val()
            send(msg)
        }
    })

    function message(msg, from = null) {
        if (msg !== '') {
            let className
            if (from) {
                className = "received"
            } else {
                className = "send"
            }
            console.log(msg)
            console.log(className)
            $('.chat-container-message').append(`<div class="${className} msg"><p>${msg}</p></div>`)
            $('#input-msg').val('');
            var el = $("#chat")
            var height = el.prop('scrollHeight')
            el.animate({ scrollTop: height }, '0');
        }

    }

    function send(msg) {
        let data = {
            from: 'admin',
            msg: msg
        }
        socket.emit('sendMessage_client', data)
        message(msg)
    }

    socket.emit('auth', user)

    socket.on('receivedMessage', data => {
        message(data.message, 'admin')
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









