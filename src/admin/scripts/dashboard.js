$(() => {


    $('.nav').click(function () {
        page = $(this).attr('ref')
        render(page)
    })
    

    $('.loggout').click(function () {
        $.ajax({
            url: 'http://localhost:8080/spa-chat/src/admin/class/login.php',
            data: { 'loggout': true },
            method: 'POST'
        }).done(
            location.reload()
        )
    })
    
})