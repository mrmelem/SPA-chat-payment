$(() => {

    $('form').on('submit', function () {
        event.preventDefault()
        sendMessage()
    })

    $(document).keypress(function (e) {
        if (e.which === 13) {
            event.preventDefault()
            sendMessage()
        }
    })

    function sendMessage() {
        let msg = $('#input-msg').val();
        if (msg !== '') {
            var el = $("#chat")
            var height = el.prop('scrollHeight')
            el.animate({ scrollTop: height }, '0');
            $('.chat-container-message').append(`<div class="send msg"><p>` + msg + `</p></div>`)
        }
        $('#input-msg').val('');
    }

    function receivedMessage(msg) {
        $('.chat-container-message').append(`<div class="received msg"><p>` + msg + `</p></div>`)
    }

    connect()
    function connect() {

        var socket = io('http://localhost:5000')
        var token = {
            id: '123125123421',
            src: 'client'
        }
        socket.emit('auth', token)
        socket.on('Initial', data => {
            receivedMessage(data.msg);
        })

        /*
        var User = {
            name: 'Pedro',
            email: 'melemredes@gmail.com',
            src: 'client'
        }

        socket.emit('setUser', User)
        */
    }


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







