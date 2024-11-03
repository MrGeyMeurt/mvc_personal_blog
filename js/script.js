$(document).ready(function () {
    //$('.ma-classe').slick({
    //slidesToShow: 1,
    //slidesToScroll: 1,
    //dots: true,
    //asNavFor: ".classe"
    //});

    //$('.classe').slick({
    //slidesToShow: 5,
    //slidesToScroll: 1,
    //autoplay: true,
    //autoplaySpeed: 3000,
    //asNavFor: ".ma-classe"
    //});

    $('.carousel-inner').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnBgClick: true
    });
});