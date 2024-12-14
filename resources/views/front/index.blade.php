@extends('front.master')
@section('content')
    <title>{{ config('app.name', 'Laravel') }}</title>

    <body class="bg-white font-[Poppins] transition-all duration-300 ease-in-out dark:bg-[#08080a]">
        <x-navbar />
        <nav id="Category"
            class="relative mx-auto mt-[30px] max-w-[1130px] transition-all duration-100 max-[1130px]:w-full max-sm:mt-[20px]">
            <div class="carousel relative z-0">
                @foreach ($categories as $category)
                    <a href="{{ route('front.category', $category->slug) }}"
                        class="mx-2 my-1 flex gap-1 rounded-full p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93] max-sm:mx-1 max-sm:p-[8px_18px]">
                        <div class="flex h-6 w-6 shrink-0 max-sm:h-[18px] max-sm:w-[18px]">
                            <img src="{{ Storage::url($category->icon) }}" alt="icon" class="dark:invert" />
                        </div>
                        <span class="dark:text-white max-sm:text-[12px]">{{ $category->name }}</span>
                    </a>
                @endforeach
            </div>
            <!-- Gradient Kiri -->
            <div class="pointer-events-none absolute left-0 top-0 z-10 h-full w-1/12 transition-all duration-100">
                <div
                    class="h-full w-full bg-gradient-to-r from-[#ffffff] to-[rgba(255,255,255,0)] transition-all duration-100 dark:from-[rgba(0,0,0,0.9)] dark:to-[rgba(0,0,0,0)]">
                </div>
            </div>
            <!-- Gradient Kanan -->
            <div class="pointer-events-none absolute right-0 top-0 z-10 h-full w-1/12 transition-all duration-100">
                <div
                    class="h-full w-full bg-gradient-to-l from-[#ffffff] to-[rgba(255,255,255,0)] transition-all duration-100 dark:from-[rgba(0,0,0,0.9)] dark:to-[rgba(0,0,0,0)]">
                </div>
            </div>
        </nav>

        <section id="Featured" class="mt-[30px] max-sm:mt-[20px]">
            <div class="main-carousel w-full">

                @forelse ($featured_articles as $article)
                    <div
                        class="featured-news-card relative flex h-[550px] w-full shrink-0 overflow-hidden max-sm:h-[450px]">
                        <img src="{{ Storage::url($article->thumbnail) }}"
                            class="thumbnail absolute h-full w-full object-cover" alt="icon" />
                        <div class="absolute z-10 h-full w-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)]">
                        </div>
                        <div
                            class="card-detail relative z-20 mx-auto flex w-full max-w-[1130px] items-end justify-between pb-10 max-[1130px]:mx-5">
                            <div class="flex flex-col gap-[10px]">
                                <p class="text-white max-sm:text-sm">Featured</p>
                                <a href="{{ route('front.details', $article->slug) }}"
                                    class="two-lines text-4xl font-bold leading-[45px] text-white transition-all duration-100 hover:underline max-sm:text-3xl">{{ $article->name }}</a>
                                <p class="text-white max-sm:text-sm">{{ $article->created_at->format('d M Y') }} •
                                    {{ $article->category->name }}</p>
                            </div>
                            <div class="prevNextButtons mb-[60px] flex items-center gap-4">
                                <button
                                    class="button--previous flex h-[38px] w-[38px] shrink-0 appearance-none items-center justify-center rounded-full ring-1 ring-white transition-all duration-100 hover:ring-2 hover:ring-[#733d93] max-sm:h-[32px] max-sm:w-[32px]">
                                    <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" class="max-sm:w-[14px]" />
                                </button>
                                <button
                                    class="button--next flex h-[38px] w-[38px] shrink-0 rotate-180 appearance-none items-center justify-center rounded-full ring-1 ring-white transition-all duration-100 hover:ring-2 hover:ring-[#733d93] max-sm:h-[32px] max-sm:w-[32px]">
                                    <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" class="max-sm:w-[14px]"/>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="dark:text-zinc-400">No articles</p>
                @endforelse

            </div>
        </section>
        <section id="Up-to-date"
            class="mx-auto mt-[70px] flex max-w-[1130px] flex-col gap-[30px] max-[1130px]:mx-5 max-sm:mt-[50px] max-sm:gap-[20px]">
            <div class="flex items-center justify-between">
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white max-sm:text-[20px] max-sm:leading-[33px]">
                    Latest Hot News <br />
                    Good for Curiousity
                </h2>
                <p
                    class="badge-orange w-fit rounded-full bg-[#f0e5f6] p-[8px_18px] text-sm font-bold leading-[21px] text-[#733d93] dark:bg-zinc-700 dark:text-white max-sm:p-[6px_14px] max-sm:text-xs">
                    UP TO DATE</p>
            </div>
            <div class="flex flex-wrap justify-center gap-[30px] max-sm:gap-[20px]">

                @forelse ($articles as $article)
                    <a href="{{ route('front.details', $article->slug) }}"
                        class="card-news w-full sm:w-1/2 md:w-1/3 lg:w-[350px]">
                        <div
                            class="flex flex-col gap-4 rounded-[20px] bg-transparent p-[26px_20px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93]">
                            <div
                                class="thumbnail-container relative flex h-[200px] max-sm:h-[180px] w-full shrink-0 overflow-hidden rounded-[20px]">
                                <p
                                    class="badge-white absolute left-5 top-5 rounded-full bg-white p-[8px_18px] text-xs font-bold uppercase leading-[18px] max-sm:p-[6px_14px] max-sm:text-[10px] max-sm:leading-[16px]">
                                    {{ $article->category->name }}</p>
                                <img src="{{ Storage::url($article->thumbnail) }}" class="h-full w-full object-cover"
                                    alt="thumbnail" />
                            </div>
                            <div class="card-info flex flex-col gap-[6px]">
                                <h3
                                    class="text-lg font-bold leading-[27px] dark:text-white max-sm:text-base max-sm:leading-[25px]">
                                    {{ substr($article->name, 0, 70) }}{{ strlen($article->name) > 70 ? '...' : '' }}</h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE] max-sm:text-xs">
                                    {{ $article->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="dark:text-zinc-400">No articles</p>
                @endforelse

            </div>

        </section>
        <section id="Best-authors" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col gap-[30px] max-sm:gap-[20px]">
            <div class="flex flex-col items-center gap-[14px] text-center">
                <p
                    class="badge-orange w-fit rounded-full bg-[#f0e5f6] p-[8px_18px] text-sm font-bold leading-[21px] text-[#733d93] dark:bg-zinc-700 dark:text-white max-sm:p-[4px_14px] max-sm:text-[10px]">
                    BEST AUTHORS</p>
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white max-sm:text-[20px]">
                    Explore All Masterpieces <br />
                    Written by People
                </h2>
            </div>

            <div class="relative mx-auto mt-[30px] w-full max-w-[1130px] max-sm:mt-[20px]">
                <div class="carousel-author relative z-0">

                    @forelse ($authors as $author)
                        <a href="{{ route('front.author', $author->slug) }}" class="card-authors">
                            <div
                                class="max-[1130px]: mx-2 my-1 flex flex-col items-center gap-4 rounded-[20px] bg-transparent p-[26px_20px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93] max-sm:mx-1 max-sm:my-[2px] max-sm:p-[20px_16px]">
                                <div
                                    class="flex h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full max-sm:h-[50px] max-sm:w-[50px]">
                                    <img src="{{ Storage::url($author->avatar) }}" class="h-full w-full object-cover"
                                        alt="avatar" />
                                </div>
                                <div class="flex flex-col gap-1 text-center">
                                    <p class="font-semibold dark:text-white max-sm:text-sm">{{ $author->name }}</p>
                                    <p class="text-sm leading-[21px] text-[#A3A6AE] max-sm:text-[10px]">
                                        {{ $author->news->count() }} News</p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p class="dark:text-zinc-300">No authors</p>
                    @endforelse
                </div>
                <div class="pointer-events-none absolute left-0 top-0 z-10 h-full w-1/12 transition-all duration-100">
                    <div
                        class="h-full w-full bg-gradient-to-r from-[#ffffff] to-[rgba(255,255,255,0)] transition-all duration-100 dark:from-[rgba(0,0,0,0.9)] dark:to-[rgba(0,0,0,0)]">
                    </div>
                </div>

                <!-- Gradient Kanan -->
                <div class="pointer-events-none absolute right-0 top-0 z-10 h-full w-1/12 transition-all duration-100">
                    <div
                        class="h-full w-full bg-gradient-to-l from-[#ffffff] to-[rgba(255,255,255,0)] transition-all duration-100 dark:from-[rgba(0,0,0,0.9)] dark:to-[rgba(0,0,0,0)]">
                    </div>
                </div>
            </div>

        </section>
        <section id="Advertisement"
            class="mx-auto mt-[70px] flex max-w-[1130px] justify-center max-[1130px]:mx-5 max-sm:mt-[50px]">
            <div class="flex w-fit shrink-0 flex-col gap-3">
                <a href="{{ $bannerads->link }}">
                    <div
                        class="flex h-[120px] w-[900px] shrink-0 overflow-hidden rounded-2xl ring-1 ring-[#EEF0F7] transition-all duration-100 dark:ring-zinc-800 max-[900px]:h-full max-[900px]:w-full max-[900px]:rounded-[2%]">
                        <img src="{{ Storage::url($bannerads->thumbnail) }}" class="h-full w-full object-cover"
                            alt="ads" />
                    </div>
                </a>
                <p
                    class="flex gap-1 text-sm font-medium leading-[21px] text-[#A3A6AE] transition-all duration-100 dark:text-zinc-400 max-sm:text-[10px]">
                    Our Advertisement <a
                        href="mailto:ciamistimes@gmail.com?subject=Pemesanan%20Pemasangan%20Iklan%20di%20Ciamis%20Times&body=Kepada%20Tim%20Ciamis%20Times%2C%0A%0ASaya%20ingin%20melakukan%20pemesanan%20untuk%20pemasangan%20iklan%20di%20situs%20web%20Ciamis%20Times.%20Berikut%20adalah%20informasi%20terkait%20pemesanan%20iklan%3A%0A%0A-%20Nama%20Perusahaan%3A%20%5BNama%20Perusahaan%5D%0A-%20Jenis%20Iklan%3A%20%5BBanner%2C%20Square%5D%0A-%20Durasi%20Pemasangan%20Iklan%3A%20%5BBerapa%20Lama%20Iklan%20Akan%20Tayang%5D%0A-%20Anggaran%3A%20%5BAnggaran%20untuk%20Iklan%5D%0A-%20Kontak%20Person%3A%20%5BNama%20Kontak%20Person%5D%0A-%20Email%20Kontak%20Person%3A%20%5BEmail%20Kontak%20Person%5D%0A-%20Telepon%20Kontak%20Person%3A%20%5BNomor%20Telepon%20Kontak%20Person%5D%0A%0AMohon%20informasi%20lebih%20lanjut%20mengenai%20prosedur%20dan%20harga%20pemasangan%20iklan%20di%20Ciamis%20Times%2C%20serta%20syarat%20dan%20ketentuan%20yang%20berlaku.%0A%0ATerima%20kasih%20atas%20perhatian%20dan%20kerjasamanya.%20Saya%20menunggu%20balasan%20dari%20Tim%20Ciamis%20Times.%0A%0AHormat%20saya%2C%0A%5BNama%20Anda%5D%0A%5BPerusahaan%20Anda%20(jika%20ada)%5D"
                        class="h-[18px] w-[18px] max-sm:h-[14px] max-sm:w-[14px]"><img
                            src="{{ asset('assets/images/icons/message-question.svg') }}" alt="icon" /></a>
                </p>
            </div>
        </section>
        <section id="Latest-entertainment"
            class="mx-auto mt-[70px] flex max-w-[1130px] flex-col gap-[30px] max-[1130px]:mx-5 max-sm:mt-[50px] max-sm:gap-[20px]">
            <div class="flex items-center justify-between">
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white max-sm:text-[20px]">
                    Latest For You <br />
                    in Entertainment
                </h2>
                <a href="{{ route('front.category', 'entertainment') }}"
                    class="flex gap-[10px] rounded-full p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:text-white dark:ring-zinc-700 dark:hover:ring-[#733d93] max-sm:p-[8px_17px] max-sm:text-xs">Explore
                    All</a>
            </div>
            <div class="flex h-fit items-center justify-between max-[750px]:flex-col">
                <div
                    class="featured-news-card relative flex h-[424px] w-full flex-1 overflow-hidden rounded-[20px] max-[900px]:mb-2 max-[750px]:w-full">
                    <img src="{{ Storage::url($entertainment_featured_articles->thumbnail) }}"
                        class="thumbnail absolute h-full w-full object-cover" alt="icon" />
                    <div class="absolute z-10 h-full w-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)]">
                    </div>
                    <div class="card-detail relative z-20 flex w-full items-end p-[30px] max-sm:p-[26px]">
                        <div class="flex flex-col gap-[10px] max-sm:gap-1">
                            <p class="text-white max-sm:text-xs">Featured</p>
                            <a href="{{ route('front.details', $entertainment_featured_articles->slug) }}"
                                class="text-3xl font-bold leading-[36px] text-white transition-all duration-100 hover:underline max-sm:text-2xl">{{ $entertainment_featured_articles->name }}</a>
                            <p class="text-white max-sm:text-xs">
                                {{ $entertainment_featured_articles->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
                <div
                    class="custom-scrollbar relative h-[424px] w-fit overflow-x-hidden overflow-y-scroll px-5 max-[750px]:w-full max-[750px]:px-2">
                    <div class="flex w-[455px] shrink-0 flex-col gap-5 max-[750px]:w-full">

                        @forelse ($entertainment_articles as $article)
                            <a href="{{ route('front.details', $article->slug) }}" class="card py-[2px]">
                                <div
                                    class="flex items-center gap-4 rounded-[20px] bg-transparent p-[14px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93]">
                                    <div
                                        class="flex h-[100px] w-[130px] shrink-0 overflow-hidden rounded-[20px] max-sm:h-[80px] max-sm:w-[110px]">
                                        <img src="{{ Storage::url($article->thumbnail) }}"
                                            class="h-full w-full object-cover" alt="thumbnail" />
                                    </div>
                                    <div class="justify-center-center flex flex-col gap-[6px]">
                                        <h3 class="text-lg font-bold leading-[27px] dark:text-white max-sm:text-sm">
                                            {{ substr($article->name, 0, 50) }}{{ strlen($article->name) > 50 ? '...' : '' }}
                                        </h3>
                                        <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                            {{ $article->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="dark:text-zinc-400 max-sm:text-xs">No articles</p>
                        @endforelse

                    </div>
                    <div
                        class="sticky bottom-0 z-10 h-[100px] w-full bg-gradient-to-b from-[rgba(255,255,255,0)] to-[#ffffff] dark:from-[rgba(0,0,0,0)] dark:to-[rgba(0,0,0,0.9)]">
                    </div>
                </div>
            </div>
        </section>

        <section id="Latest-business"
            class="mx-auto mt-[70px] flex max-w-[1130px] flex-col gap-[30px] max-[1130px]:mx-5 max-sm:mt-[50px] max-sm:gap-[20px]">
            <div class="flex items-center justify-between">
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white max-sm:text-[20px]">
                    Latest For You <br />
                    in Business
                </h2>
                <a href="{{ route('front.category', 'business') }}"
                    class="flex gap-[10px] rounded-full p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:text-white dark:ring-zinc-700 dark:hover:ring-[#733d93] max-sm:p-[8px_17px] max-sm:text-[12px]">Explore
                    All</a>
            </div>
            <div class="flex h-fit items-center justify-between max-[750px]:flex-col">
                <div
                    class="featured-news-card relative flex h-[424px] w-full flex-1 overflow-hidden rounded-[20px] max-[900px]:mb-2 max-[750px]:w-full">
                    <img src="{{ Storage::url($business_featured_articles->thumbnail) }}"
                        class="thumbnail absolute h-full w-full object-cover" alt="icon" />
                    <div class="absolute z-10 h-full w-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)]">
                    </div>
                    <div class="card-detail relative z-20 flex w-full items-end p-[30px] max-sm:p-[26px]">
                        <div class="flex flex-col gap-[10px] max-sm:gap-1">
                            <p class="text-white max-sm:text-xs">Featured</p>
                            <a href="{{ route('front.details', $business_featured_articles->slug) }}"
                                class="text-3xl font-bold leading-[36px] text-white transition-all duration-100 hover:underline max-sm:text-2xl">{{ $business_featured_articles->name }}</a>
                            <p class="text-white max-sm:text-xs">
                                {{ $business_featured_articles->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
                <div
                    class="custom-scrollbar relative h-[424px] w-fit overflow-x-hidden overflow-y-scroll px-5 max-[750px]:w-full max-[750px]:px-2">
                    <div class="flex w-[455px] shrink-0 flex-col gap-5 max-[750px]:w-full">

                        @forelse ($business_articles as $article)
                            <a href="{{ route('front.details', $article->slug) }}" class="card py-[2px]">
                                <div
                                    class="flex items-center gap-4 rounded-[20px] bg-transparent p-[14px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93]">
                                    <div
                                        class="flex h-[100px] w-[130px] shrink-0 overflow-hidden rounded-[20px] max-sm:h-[80px] max-sm:w-[110px]">
                                        <img src="{{ Storage::url($article->thumbnail) }}"
                                            class="h-full w-full object-cover" alt="thumbnail" />
                                    </div>
                                    <div class="justify-center-center flex flex-col gap-[6px]">
                                        <h3 class="text-lg font-bold leading-[27px] dark:text-white max-sm:text-sm">
                                            {{ substr($article->name, 0, 50) }}{{ strlen($article->name) > 50 ? '...' : '' }}
                                        </h3>
                                        <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                            {{ $article->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="dark:text-zinc-400 max-sm:text-xs">No articles</p>
                        @endforelse

                    </div>
                    <div
                        class="sticky bottom-0 z-10 h-[100px] w-full bg-gradient-to-b from-[rgba(255,255,255,0)] to-[#ffffff] dark:from-[rgba(0,0,0,0)] dark:to-[rgba(0,0,0,0.9)]">
                    </div>
                </div>
            </div>
        </section>
        
        <section id="Latest-automotive"
            class="mx-auto mt-[70px] max-sm:mt-[50px] flex max-w-[1130px] flex-col gap-[30px] max-[1130px]:mx-5 max-sm:gap-[20px]">
            <div class="flex items-center justify-between">
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white max-sm:text-[20px]">
                    Latest For You <br />
                    in Automotive
                </h2>
                <a href="{{ route('front.category', 'automotive') }}"
                    class="flex gap-[10px] rounded-full p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:text-white dark:ring-zinc-700 dark:hover:ring-[#733d93] max-sm:p-[8px_17px] max-sm:text-[12px]">Explore
                    All</a>
            </div>
            <div class="flex h-fit items-center justify-between max-[750px]:flex-col">
                <div
                    class="featured-news-card relative flex h-[424px] w-full flex-1 overflow-hidden rounded-[20px] max-[900px]:mb-2 max-[750px]:w-full">
                    <img src="{{ Storage::url($automotive_featured_articles->thumbnail) }}"
                        class="thumbnail absolute h-full w-full object-cover" alt="icon" />
                    <div class="absolute z-10 h-full w-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)]">
                    </div>
                    <div class="card-detail relative z-20 flex w-full items-end p-[30px] max-sm:p-[26px]">
                        <div class="flex flex-col gap-[10px] max-sm:gap-1">
                            <p class="text-white max-sm:text-xs">Featured</p>
                            <a href="{{ route('front.details', $automotive_featured_articles->slug) }}"
                                class="text-3xl font-bold leading-[36px] text-white transition-all duration-100 hover:underline max-sm:text-2xl">{{ $automotive_featured_articles->name }}</a>
                            <p class="text-white max-sm:text-xs">
                                {{ $automotive_featured_articles->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
                <div
                    class="custom-scrollbar relative h-[424px] w-fit overflow-x-hidden overflow-y-scroll px-5 max-[750px]:w-full max-[750px]:px-2">
                    <div class="flex w-[455px] shrink-0 flex-col gap-5 max-[750px]:w-full">

                        @forelse ($automotive_articles as $article)
                            <a href="{{ route('front.details', $article->slug) }}" class="card py-[2px]">
                                <div
                                    class="flex items-center gap-4 rounded-[20px] bg-transparent p-[14px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93]">
                                    <div
                                        class="flex h-[100px] w-[130px] shrink-0 overflow-hidden rounded-[20px] max-sm:h-[80px] max-sm:w-[110px]">
                                        <img src="{{ Storage::url($article->thumbnail) }}"
                                            class="h-full w-full object-cover" alt="thumbnail" />
                                    </div>
                                    <div class="justify-center-center flex flex-col gap-[6px]">
                                        <h3 class="text-lg font-bold leading-[27px] dark:text-white max-sm:text-sm">
                                            {{ substr($article->name, 0, 50) }}{{ strlen($article->name) > 50 ? '...' : '' }}
                                        </h3>
                                        <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                            {{ $article->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="dark:text-zinc-400 max-sm:text-xs">No articles</p>
                        @endforelse

                    </div>
                    <div
                        class="sticky bottom-0 z-10 h-[100px] w-full bg-gradient-to-b from-[rgba(255,255,255,0)] to-[#ffffff] dark:from-[rgba(0,0,0,0)] dark:to-[rgba(0,0,0,0.9)]">
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
