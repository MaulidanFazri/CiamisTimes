<nav id="Navbar"
    class="mx-auto mt-[30px] flex max-w-[1130px] items-center justify-between transition-all duration-100">
    <div class="logo-container flex items-center gap-[30px]">
        <a href="{{ route('front.index') }}" class="flex shrink-0">
            <img src="{{ asset('assets/images/logos/LogoCiamis.svg') }}" alt="logo"
                class="transition-colors duration-100 dark:invert" />
        </a>
        <div class="h-12 border border-[#E8EBF4] transition-colors duration-100 dark:border-zinc-600"></div>
        <form method="GET" action="{{ route('front.search') }}" method="GET"
            class="flex w-[450px] items-center gap-[10px] rounded-lg border border-[#E8EBF4] p-[12px_20px] transition-all duration-100 focus-within:ring-2 focus-within:ring-[#567a94] dark:border-zinc-600">

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
            class="group flex h-12 w-12 gap-[10px] rounded-lg border border-[#E8EBF4] p-2 font-semibold transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:border-zinc-600 dark:hover:ring-[#567a94]">
            <!-- Icon for light mode -->
            <svg class="block fill-zinc-400 transition-colors duration-100 group-hover:fill-[#567a94] dark:hidden"
                fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <!-- Icon for dark mode -->
            <svg class="hidden fill-zinc-400 transition-colors duration-100 group-hover:fill-[#567a94] dark:block"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>

        <a href=""
            class="flex gap-[10px] rounded-lg bg-[#567a94] p-[12px_22px] font-bold text-white transition-all duration-100 hover:shadow-[0_10px_20px_0_#567a9480]">
            <div class="flex h-6 w-6 shrink-0">
                <img src="{{ asset('assets/images/icons/favorite-chart.svg') }}" alt="icon" />
            </div>
            <span>Post Ads</span>
        </a>
    </div>
</nav>
