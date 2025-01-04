<div class="max-[1130px]:mx-5">
    <nav id="Navbar"
        class="mx-auto mb-[10px] mt-[30px] flex max-w-[1130px] items-center justify-between gap-[30px] transition-all duration-100">
        <div class="logo-container flex items-center gap-[30px] max-sm:gap-[20px]">
            <a href="{{ route('front.index') }}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="logo" id="logo"
                    class="h-[80px] transition-colors duration-100 max-sm:h-[40px] max-sm:w-auto" />
            </a>

            <!-- Garis -->
            <div
                class="h-12 border border-[#E8EBF4] transition-colors duration-100 dark:border-zinc-600 max-[800px]:hidden max-sm:h-[34px]">
            </div>

            <!-- Form Pencarian -->
            <form method="GET" action="{{ route('front.search') }}" method="GET"
                class="flex w-[450px] grow items-center gap-[10px] rounded-full border border-[#E8EBF4] p-[12px_20px] transition-all duration-100 focus-within:ring-2 focus-within:ring-primary dark:border-zinc-600 max-[800px]:hidden">
                @csrf
                <button type="submit" class="flex h-5 w-5 shrink-0">
                    <img src="{{ asset('assets/images/icons/search-normal.svg') }}" alt="icon"
                        class="transition-colors duration-100 dark:invert" />
                </button>
                <input type="text" name="keyword" id=""
                    class="w-full appearance-none bg-transparent font-semibold outline-none placeholder:font-normal placeholder:text-[#A3A6AE] dark:text-white dark:placeholder:text-zinc-400"
                    placeholder="Search hot trendy news today..." />
            </form>
        </div>

        <div class="logo-container flex flex-shrink-0 items-center gap-[30px] max-sm:gap-[20px]">

            <!-- Tombol Dark Mode -->
            <button id="darkModeToggle"
                class="group flex h-12 w-12 gap-[10px] rounded-full p-2 font-semibold ring-1 ring-[#E8EBF4] transition-all duration-100 hover:ring-2 hover:ring-primary dark:ring-zinc-600 dark:hover:ring-primary max-sm:h-[36px] max-sm:w-[36px]">

                <!-- Icon for light mode -->
                <svg class="block fill-zinc-400 transition-colors duration-100 group-hover:fill-[#FFD700] dark:hidden"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>

                <!-- Icon for dark mode -->
                <svg class="hidden fill-zinc-400 transition-colors duration-100 group-hover:fill-[#FFD700] dark:block"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>

            <!-- Tombol Post Ads -->
            <a href="mailto:ciamistimes@gmail.com?subject=Pemesanan%20Pemasangan%20Iklan%20di%20Ciamis%20Times&body=Kepada%20Tim%20Ciamis%20Times%2C%0A%0ASaya%20ingin%20melakukan%20pemesanan%20untuk%20pemasangan%20iklan%20di%20situs%20web%20Ciamis%20Times.%20Berikut%20adalah%20informasi%20terkait%20pemesanan%20iklan%3A%0A%0A-%20Nama%20Perusahaan%3A%20%5BNama%20Perusahaan%5D%0A-%20Jenis%20Iklan%3A%20%5BBanner%2C%20Square%5D%0A-%20Durasi%20Pemasangan%20Iklan%3A%20%5BBerapa%20Lama%20Iklan%20Akan%20Tayang%5D%0A-%20Anggaran%3A%20%5BAnggaran%20untuk%20Iklan%5D%0A-%20Kontak%20Person%3A%20%5BNama%20Kontak%20Person%5D%0A-%20Email%20Kontak%20Person%3A%20%5BEmail%20Kontak%20Person%5D%0A-%20Telepon%20Kontak%20Person%3A%20%5BNomor%20Telepon%20Kontak%20Person%5D%0A%0AMohon%20informasi%20lebih%20lanjut%20mengenai%20prosedur%20dan%20harga%20pemasangan%20iklan%20di%20Ciamis%20Times%2C%20serta%20syarat%20dan%20ketentuan%20yang%20berlaku.%0A%0ATerima%20kasih%20atas%20perhatian%20dan%20kerjasamanya.%20Saya%20menunggu%20balasan%20dari%20Tim%20Ciamis%20Times.%0A%0AHormat%20saya%2C%0A%5BNama%20Anda%5D%0A%5BPerusahaan%20Anda%20(jika%20ada)%5D"
                class="flex flex-shrink-0 gap-[10px] rounded-full bg-primary p-[12px_22px] font-bold text-white transition-all duration-100 hover:shadow-[0_10px_20px_0_#A7218580] dark:bg-transparent dark:ring-2 dark:ring-primary dark:hover:bg-primary dark:hover:shadow-[0_10px_20px_0_#A7218580] dark:hover:ring-0 max-[800px]:hidden max-sm:gap-2 max-sm:p-[8px_17px]">
                <div class="flex h-6 w-6 shrink-0 max-sm:h-[20px] max-sm:w-[20px]">
                    <img src="{{ asset('assets/images/icons/favorite-chart.svg') }}" alt="icon" />
                </div>
                <span class="max-sm:text-[13px]">Post Ads</span>
            </a>

            <!-- Tombol Menu -->
            <button id="toggle-navbar"
                class="group flex h-12 w-12 items-center justify-center rounded-full font-semibold transition-all duration-100 max-sm:h-[36px] max-sm:w-[36px] min-[800px]:hidden"
                aria-controls="navbar-hamburger" aria-expanded="false" type="button">
                <span class="sr-only">Open main menu</span>

                <!-- Ikon Hamburger -->
                {{-- <svg id="icon-hamburger"
                    class="w-[26px] text-black transition-transform duration-300 ease-in-out group-hover:text-primary dark:text-white min-[640px]:w-[36px]"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg> --}}
                <svg id="icon-hamburger"
                    class="h-9 w-9 text-zinc-400 transition-transform duration-300 ease-in-out group-hover:text-primary dark:text-white min-[640px]:w-[36px]""
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" >
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>

                <!-- Ikon Close -->
                <svg id="icon-close"
                    class="hidden w-[36px] text-primary transition-transform duration-300 ease-in-out group-hover:text-primary min-[640px]:w-[60px]"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </nav>
</div>

<!-- Navbar Hamburger -->
<div class="hidden w-full bg-[#F9F9FC] px-5 py-8 dark:bg-zinc-800 dark:bg-opacity-55" id="navbar-hamburger">

    <!-- Form Pencarian -->
    <form method="GET" action="{{ route('front.search') }}"
        class="relative mb-5 flex h-12 items-center rounded-full border border-[#E8EBF4] transition-all duration-100 focus-within:ring-2 focus-within:ring-primary dark:border-zinc-600 max-sm:h-10">
        <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
            <svg class="h-4 w-4 text-gray-500 dark:text-gray-400 max-sm:h-3 max-sm:w-3" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </div>
        <input type="text" name="keyword" id="search-navbar"
            class="block h-full w-full rounded-full border-none bg-transparent py-2 ps-10 text-sm text-gray-900 outline-none transition-all duration-100 placeholder:font-normal placeholder:text-[#A3A6AE] focus:ring-0 dark:text-white dark:placeholder:text-zinc-400 max-sm:ps-8 max-sm:text-[10px]"
            placeholder="Search hot trendy news today..." />
    </form>

    <!-- Tombol Post Ads -->
    <ul class="items-centerrounded-full mt-4 flex flex-col font-medium transition-all duration-100 dark:border-primary">
        <li>
            <a href="mailto:ciamistimes@gmail.com?subject=Pemesanan%20Pemasangan%20Iklan%20di%20Ciamis%20Times&body=Kepada%20Tim%20Ciamis%20Times%2C%0A%0ASaya%20ingin%20melakukan%20pemesanan%20untuk%20pemasangan%20iklan%20di%20situs%20web%20Ciamis%20Times.%20Berikut%20adalah%20informasi%20terkait%20pemesanan%20iklan%3A%0A%0A-%20Nama%20Perusahaan%3A%20%5BNama%20Perusahaan%5D%0A-%20Jenis%20Iklan%3A%20%5BBanner%2C%20Square%5D%0A-%20Durasi%20Pemasangan%20Iklan%3A%20%5BBerapa%20Lama%20Iklan%20Akan%20Tayang%5D%0A-%20Anggaran%3A%20%5BAnggaran%20untuk%20Iklan%5D%0A-%20Kontak%20Person%3A%20%5BNama%20Kontak%20Person%5D%0A-%20Email%20Kontak%20Person%3A%20%5BEmail%20Kontak%20Person%5D%0A-%20Telepon%20Kontak%20Person%3A%20%5BNomor%20Telepon%20Kontak%20Person%5D%0A%0AMohon%20informasi%20lebih%20lanjut%20mengenai%20prosedur%20dan%20harga%20pemasangan%20iklan%20di%20Ciamis%20Times%2C%20serta%20syarat%20dan%20ketentuan%20yang%20berlaku.%0A%0ATerima%20kasih%20atas%20perhatian%20dan%20kerjasamanya.%20Saya%20menunggu%20balasan%20dari%20Tim%20Ciamis%20Times.%0A%0AHormat%20saya%2C%0A%5BNama%20Anda%5D%0A%5BPerusahaan%20Anda%20(jika%20ada)%5D"
                class="block rounded-full border-2 border-primary bg-primary text-center text-white hover:shadow-[0_10px_15px_0_#A7218580] dark:bg-[#19191c] dark:hover:bg-primary">
                <div class="flex h-12 w-full items-center justify-center gap-2 max-sm:h-10">
                    <div class="flex h-6 w-6 shrink-0 max-sm:h-[20px] max-sm:w-[20px]">
                        <img src="{{ asset('assets/images/icons/favorite-chart.svg') }}" alt="icon" />
                    </div>
                    <span class="max-sm:text-[13px]">Post Ads</span>
                </div>
            </a>
        </li>
    </ul>
</div>
<script>
    const toggleButton = document.getElementById('hamburger-toggle');
    const navbarHamburger = document.getElementById('navbar-hamburger');

    toggleButton.addEventListener('click', () => {
        const isHidden = navbarHamburger.classList.contains('-translate-y-full');
        if (isHidden) {
            navbarHamburger.classList.remove('-translate-y-full', 'opacity-0');
            navbarHamburger.classList.add('translate-y-0', 'opacity-100');
        } else {
            navbarHamburger.classList.add('-translate-y-full', 'opacity-0');
            navbarHamburger.classList.remove('translate-y-0', 'opacity-100');
        }
    });
</script>
