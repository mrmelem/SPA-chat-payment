$(() => {
    $('.aside-group-title').click(function () {
        if ($(this).siblings('.aside-group-list').is(':hidden')) {
            $(this).siblings('.aside-group-list').slideToggle(200)
            $(this).children('.rot').removeClass('active')
        } else {
            $(this).children('.rot').addClass('active')
            $(this).siblings('.aside-group-list').slideToggle(200)
        }
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

    $('input[type=color]').change(function () {
        let container = $(this).siblings('.color-text');
        let val = $(this).val();
        container.val(val);
    })

    $('.color-text').change(function () {
        let container = $(this).siblings('input[type=color]');
        let val = $(this).val();
        let data = val.split('');
        if (data[0] !== "#" || data.length !== 7) {
            if (data[0] !== "#") {
                data = ('#' + val)
            }
            if (data.length !== 7) {
                data = data[0] + data[1] + data[1] + data[2] + data[2] + data[3] + data[3]
            }
        } else {
            data = data.join('')
        }
        container.val(data);
        $(this).val(data);
    })
})


function auto_grow(element) {
    element.style.height = '5px'
    element.style.height = (element.scrollHeight) + "px";
    console.log("Teste")
}