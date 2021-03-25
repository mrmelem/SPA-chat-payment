$(() => {

    var DASHBOARD_PATH = "src/pages/dashboard/pages/";
    var page = '';
    render(page)

    function render(page) {
        if (page == "") {
            $('.main-container').load(DASHBOARD_PATH + 'home.php')
            $('#header-page').html('Painel de controle')
        } else {
            $('.main-container').load(DASHBOARD_PATH + page + '.php');
            page = page.toLowerCase().replace(/\b[a-z]/g, function (letter) {
                return letter.toUpperCase();
            });
            $('#header-page').html(page)
        }
        console.log(page)
    }

    $('.nav').click(function () {
        page = $(this).attr('ref')
        render(page)
    })

    $('.aside-group-title').click(function () {
        if ($(this).siblings('.aside-group-list').is(':hidden')) {
            $(this).siblings('.aside-group-list').slideToggle(200)
            $(this).children('.rot').removeClass('active')
        } else {
            $(this).children('.rot').addClass('active')
            $(this).siblings('.aside-group-list').slideToggle(200)
        }
    })
})