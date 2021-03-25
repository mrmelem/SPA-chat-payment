$(() => {
    var chat = $('.content')
    chat.hide()
    $('.chat-title').click(function () {
        chat.slideToggle(500)
    })


})