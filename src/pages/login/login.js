$(() => {
    $('button').click(function () {
        event.preventDefault();
        ident = $(this).attr('id')
        if (ident == 'login') {
            user = $('#login-name').val()
            password = $('#login-password').val()
            setCookie = $('#setCookie').is(':checked')

            console.log("Usuário: " + user)
            console.log("Senha: " + password)
            console.log("Manter conectado: " + setCookie)

        } else {
            // Colocar página de recuperação de senha
        }
    })
})