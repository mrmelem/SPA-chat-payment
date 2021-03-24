$(() => {

    var DASHBOARD_PATH = "src/pages/dashboard/pages/";
    var page = '';
    render(page)

    function render(page){
        if (page == ""){
            $('.main-container').load(DASHBOARD_PATH + 'home.php')
        }else{
            $('.main-container').load(DASHBOARD_PATH + page + '.php');
        }
    }

    $('.nav').click(function(){
        page = $(this).attr('ref')
        render(page)
    })

    $('.aside-group-title').click(function(){
        if ( $(this).siblings('.aside-group-list').is(':hidden')){
            $(this).siblings('.aside-group-list').slideToggle(200)
            $(this).children('.rot').removeClass('active')
        }else{
            $(this).children('.rot').addClass('active')
            $(this).siblings('.aside-group-list').slideToggle(200)
        }
    })
})