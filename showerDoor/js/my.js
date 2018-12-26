// 大於992px
// if ($(window).width() < 992) {
//     $(function () {
//         $("nav").find("a").click(function () {
//             $(".navbar-toggler").trigger("click");
//             let target = $(this).data("target");
//             let topOffset = $(target).offset().top;
//             $("html,body").animate({
//                 scrollTop: topOffset
//             })
//         })
//     })   
// } else {
//     $(function () {
//         $("nav").find("a").click(function () {
//             let target = $(this).data("target");
//             let topOffset = $(target).offset().top;
//             $("html,body").animate({
//                 scrollTop: topOffset
//             })
            
//         })
//     })
// }

$(function () {
    $("nav").find("a").click(function () {
        if ($(window).width() < 992) {
            $(".navbar-toggler").trigger("click");
        }
        let target = $(this).data("target");
        let topOffset = $(target).offset().top;
        $("html,body").animate({
            scrollTop: topOffset
        })
    })
})   

  

// fix top
let navHeight = $("nav").outerHeight(true);
$(".fixTop").css("padding-top", navHeight)