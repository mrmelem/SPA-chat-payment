$(() => {
    var chat = $('.content')
    chat.hide()
    $('.chat-title').click(function () {
        chat.slideToggle(500)
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