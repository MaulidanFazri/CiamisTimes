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

$(".carousel").flickity({
    // options
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

// Inisialisasi carousel
var carouselAuthor = $(".carousel-author").flickity({
    freeScroll: true, // Mengizinkan pengguna menggulir secara manual
    contain: true, // Menjaga elemen tetap dalam kontainer
    wrapAround: true, // Memungkinkan looping tak terbatas
    prevNextButtons: false, // Sembunyikan tombol navigasi
    pageDots: false, // Sembunyikan indikator halaman
    cellAlign: "left", // Elemen mulai dari sisi kiri
    dragThreshold: 10, // Sensitivitas drag
    selectedAttraction: 0.01, // Pergerakan halus
    friction: 0.8, // Menjaga pergerakan stabil
    freeScrollFriction: 0.05, // Pergerakan halus saat menggulir
    autoPlay: 4000, // Autoplay setiap 1.5 detik
    pauseAutoPlayOnHover: true, // Tetap autoplay saat hover
});


