$(document).ready(function () {

    $(".team_flex_person_img img").animated("bounceInLeft");
    $(".team_flex_person_text").animated("bounceInRight");
    $(".values_flex_block_img").animated("bounceInLeft");
    $(".values_flex_block_text p").animated("bounceInUp");

    $("#menu-item-78 a").click(function() {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 800);
        return false;
    });
});


