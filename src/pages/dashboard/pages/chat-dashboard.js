$(() => {

    var socket = io('http://localhost:5000')
    var user = { src: 'admin' }

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
                className = "send"
            } else {
                className = "received"
            }
            $('.container-msg').append(`<div class="${className} msg"><p>${msg}</p></div>`)
            $('#input-msg').val('');
            var el = $("#chat")
            var height = el.prop('scrollHeight')
            el.animate({ scrollTop: height }, '0');
        }
    }


    function send(msg) {
        let data = {
            from: 'client',
            msg: msg
        }
        socket.emit('sendMessage_client', data)
        message(msg)
    }

    socket.emit('auth', user)

    socket.on('receivedMessage', data => {
        message(data.message, 'client')
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

















