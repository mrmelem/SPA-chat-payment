$(() => {
    $('.fa-share-alt').click(function () {
        var id = $(this).attr('h');
        var focus = ''

        $('.tokenRow').each(function () {
            var target = $(this).attr('h')
            if (target == id && $(this).is(':hidden') == true) {
                focus = id;
                $(this).fadeIn(1000)
            } else
                $(this).hide()
        })

        $('.dataRow').each(function () {
            id = $(this).children('td').children('.fas').attr('h')

            if (focus == id)
                $(this).css('background', '#ccc')
            else
                $(this).css('background', 'white')
        })
    })

    $('#checklist input[type=radio]').each(function () {
        if ($(this).val() == $('#sit').val()) {
            $(this).attr('checked', 'checked')
        }
    })
})