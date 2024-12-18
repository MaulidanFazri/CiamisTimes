const $carousel = $(".main-carousel").flickity({
    // options
    cellAlign: "left",
    contain: true,
    prevNextButtons: false,
    pageDots: false,
    wrapAround: true,
});

$(".button--previous").on("click", function () {
    $carousel.flickity("previous", true);
});
$(".button--next").on("click", function () {
    $carousel.flickity("next", true);
});

$(".carousel-category").flickity({
    freeScroll: true,
    contain: true,
    prevNextButtons: false,
    pageDots: false,
    wrapAround: true,
    cellAlign: "left",
    dragThreshold: 10, // Sensitivitas drag
    selectedAttraction: 0.01, // Pergerakan halus
    friction: 1, // Menjaga pergerakan stabil
    freeScrollFriction: 0.05, // Pergerakan halus saat menggulir
});
