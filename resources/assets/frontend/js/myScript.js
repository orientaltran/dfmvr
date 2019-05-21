// Slider

$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < 4; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
    }
});
 
var touchSensitivity = 5;
$("#carousel-example-multi").on("touchstart", function (event) {
    var xClick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove", function (event) {
        var xMove = event.originalEvent.touches[0].pageX;
        if (Math.floor(xClick - xMove) > touchSensitivity) {
            $(this).carousel('next');
        } else if (Math.floor(xClick - xMove) < -(touchSensitivity)) {
            $(this).carousel('prev');
        }
    });
    $("#carousel-example-multi").on("touchend", function () {
        $(this).off("touchmove");
    });
});
// Actice menu
$(".item-menu").on("click", function () {
    $(".menu").find("li.active").prop("class", "item-menu");
    $(this).addClass("active");
})