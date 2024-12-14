tailwind.config = {
    darkMode: "class",
};

document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("toggle-navbar");
    const navbarHamburger = document.getElementById("navbar-hamburger");
    const iconHamburger = document.getElementById("icon-hamburger");
    const iconClose = document.getElementById("icon-close");

    // Fungsi untuk toggle navbar
    toggleButton.addEventListener("click", function () {
        const isHidden = navbarHamburger.classList.toggle("hidden");

        // Ubah ikon dengan animasi
        if (isHidden) {
            iconHamburger.classList.remove("hidden");
            iconHamburger.classList.add("rotate-0");
            iconClose.classList.add("hidden");
            iconClose.classList.remove("rotate-180");
        } else {
            iconHamburger.classList.add("hidden");
            iconHamburger.classList.remove("rotate-0");
            iconClose.classList.remove("hidden");
            iconClose.classList.add("rotate-180");
        }
    });

    // Fungsi untuk menutup navbar jika layar lebih besar dari 800px
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 800) {
            navbarHamburger.classList.add("hidden");
            iconHamburger.classList.remove("hidden");
            iconHamburger.classList.add("rotate-0");
            iconClose.classList.add("hidden");
            iconClose.classList.remove("rotate-180");
        }
    });
});


