$(() => {

    var socket = io('192.168.1.100:5000')
    var user = { src: 'client' }

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









