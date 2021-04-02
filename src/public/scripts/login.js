$('button').click(function () {
    event.preventDefault();
    ident = $(this).attr('id')
    if (ident == 'login') {

        data = {
            'user': $('#login-name').val(),
            'password': $('#login-password').val(),
            'setCookie': $('#setCookie').is(':checked')
        }

        $.ajax({
            url: 'http://localhost:8080/spa-chat/src/admin/class/login.php',
            data: data,
            dataType: 'json',
            method: 'POST'
        }).done(e => {
            if (e) {
                window.location.replace('http://localhost:8080/spa-chat/dashboard');
                console.log(e.session);
            } else {
                alert("Off")
            }
        })
    } else {
        // Colocar página de recuperação de senha
    }
})
