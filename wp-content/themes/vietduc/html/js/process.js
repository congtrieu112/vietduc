$(function() {
    var data = $(".carousel-inner .active .carousel-caption").html();
    $(".vd-caption").html(data);
    $('.carousel').carousel({
        interval: false
    })
    $('.carousel').on('slide.bs.carousel', function () {
        var data = $(".carousel-inner .active .carousel-caption").html();
        $(".vd-caption").html(data);
    });
    //alert("ok");


});
