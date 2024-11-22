<nav id="Navbar"
    class="mx-auto mt-[30px] flex max-w-[1130px] items-center justify-between transition-all duration-100">
    <div class="logo-container flex items-center gap-[30px]">
        <a href="{{ route('front.index') }}" class="flex shrink-0">
            <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="logo" id="logo"
                class="w-[125px] transition-colors duration-100" />
        </a>
        <div class="h-12 border border-[#E8EBF4] transition-colors duration-100 dark:border-zinc-600"></div>
        <form method="GET" action="{{ route('front.search') }}" method="GET"
            class="flex w-[450px] items-center gap-[10px] rounded-full border border-[#E8EBF4] p-[12px_20px] transition-all duration-100 focus-within:ring-2 focus-within:ring-[#733d93] dark:border-zinc-600">

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
    <div class="logo-container flex items-center gap-[30px]">
        <button id="darkModeToggle"
            class="group flex h-12 w-12 gap-[10px] rounded-full p-2 font-semibold ring-1 ring-[#E8EBF4] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-600 dark:hover:ring-[#733d93]">
            <!-- Icon for light mode -->
            <svg class="block fill-zinc-400 transition-colors duration-100 group-hover:fill-[#733d93] dark:hidden"
                fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <!-- Icon for dark mode -->
            <svg class="hidden fill-zinc-400 transition-colors duration-100 group-hover:fill-[#733d93] dark:block"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>

        <a href="mailto:ciamistimes@gmail.com?subject=Pemesanan%20Pemasangan%20Iklan%20di%20Ciamis%20Times&body=Kepada%20Tim%20Ciamis%20Times%2C%0A%0ASaya%20ingin%20melakukan%20pemesanan%20untuk%20pemasangan%20iklan%20di%20situs%20web%20Ciamis%20Times.%20Berikut%20adalah%20informasi%20terkait%20pemesanan%20iklan%3A%0A%0A-%20Nama%20Perusahaan%3A%20%5BNama%20Perusahaan%5D%0A-%20Jenis%20Iklan%3A%20%5BBanner%2C%20Square%5D%0A-%20Durasi%20Pemasangan%20Iklan%3A%20%5BBerapa%20Lama%20Iklan%20Akan%20Tayang%5D%0A-%20Anggaran%3A%20%5BAnggaran%20untuk%20Iklan%5D%0A-%20Kontak%20Person%3A%20%5BNama%20Kontak%20Person%5D%0A-%20Email%20Kontak%20Person%3A%20%5BEmail%20Kontak%20Person%5D%0A-%20Telepon%20Kontak%20Person%3A%20%5BNomor%20Telepon%20Kontak%20Person%5D%0A%0AMohon%20informasi%20lebih%20lanjut%20mengenai%20prosedur%20dan%20harga%20pemasangan%20iklan%20di%20Ciamis%20Times%2C%20serta%20syarat%20dan%20ketentuan%20yang%20berlaku.%0A%0ATerima%20kasih%20atas%20perhatian%20dan%20kerjasamanya.%20Saya%20menunggu%20balasan%20dari%20Tim%20Ciamis%20Times.%0A%0AHormat%20saya%2C%0A%5BNama%20Anda%5D%0A%5BPerusahaan%20Anda%20(jika%20ada)%5D"
            class="flex gap-[10px] rounded-full bg-[#733d93] p-[12px_22px] font-bold text-white transition-all duration-100 hover:shadow-[0_10px_20px_0_#733d9380] dark:bg-transparent dark:ring-2 dark:ring-[#733d93] dark:hover:bg-[#733d93] dark:hover:shadow-[0_10px_20px_0_#733d9380] dark:hover:ring-0">
            <div class="flex h-6 w-6 shrink-0">
                <img src="{{ asset('assets/images/icons/favorite-chart.svg') }}" alt="icon" />
            </div>
            <span>Post Ads</span>
        </a>
    </div>
</nav>
