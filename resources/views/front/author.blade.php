@extends('front.master')
@section('content')

    <title>{{ config('app.name', 'Laravel') }} | {{ $author->name }}</title>


    <body class="font-[Poppins] dark:bg-[#08080a]">
        <x-navbar />

        <!-- Category -->
        <nav id="Category"
            class="relative mx-auto mt-[30px] max-w-[1130px] transition-all duration-100 max-[1130px]:w-full max-sm:mt-[20px]">
            <div class="carousel-category relative z-0">
                @foreach ($categories as $item_category)
                    <a href="{{ route('front.category', $item_category->slug) }}"
                        class="mx-2 my-1 flex gap-1 rounded-full p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93] max-sm:mx-1 max-sm:p-[8px_18px]">
                        <div class="flex h-6 w-6 shrink-0 max-sm:h-[18px] max-sm:w-[18px]">
                            <img src="{{ Storage::url($item_category->icon) }}" alt="icon" class="dark:invert" />
                        </div>
                        <span class="dark:text-white max-sm:text-[12px]">{{ $item_category->name }}</span>
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

        <!-- Author -->
        <section id="author"
            class="mx-auto mt-[70px] flex max-w-[1130px] flex-col items-center gap-[30px] max-[1130px]:mx-5 max-sm:mt-[50px] max-sm:gap-[20px]">
            <div id="title" class="flex items-center gap-[30px] max-sm:gap-[20px] max-[450px]:gap-[10px]">
                <h1
                    class="text-4xl font-bold leading-[45px] dark:text-white max-sm:text-right max-sm:text-2xl max-sm:tracking-wider max-[450px]:text-xl">
                    Author News
                </h1>
                <h1 class="text-4xl font-bold leading-[45px] dark:text-white max-sm:text-2xl">/</h1>
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-[60px] w-[60px] shrink-0 overflow-hidden rounded-full max-sm:h-[45px] max-sm:w-[45px] max-[450px]:h-[40px] max-[450px]:w-[40px]">
                        <img src="{{ Storage::url($author->avatar) }}" alt="profile photo" />
                    </div>
                    <div class="flex flex-col">
                        <p
                            class="text-lg font-semibold leading-[27px] dark:text-white max-sm:text-sm max-[450px]:text-[10px]">
                            {{ $author->name }}
                        </p>
                        <span class="text-[#A3A6AE] max-sm:text-xs max-[450px]:text-[8px]">{{ $author->occupation }}</span>
                    </div>
                </div>
            </div>
            </h1>

            <!-- Cards -->
            @if ($author->news->isNotEmpty())
                <div id="search-cards" class="flex flex-wrap justify-center gap-[30px] max-sm:gap-[20px]">
                    @foreach ($author->news as $news)
                        <a href="{{ route('front.details', $news->slug) }}"
                            class="card-news w-full sm:w-1/2 md:w-1/3 lg:w-[350px]">
                            <div
                                class="flex flex-col gap-4 rounded-[20px] bg-transparent p-[26px_20px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93] max-sm:p-[24px_18px]">
                                <div
                                    class="thumbnail-container relative h-[200px] overflow-hidden rounded-[20px] max-sm:h-[180px]">
                                    <div
                                        class="badge absolute bottom-auto left-5 right-auto top-5 flex rounded-[50px] bg-white p-[8px_18px] max-sm:p-[6px_14px]">
                                        <p
                                            class="text-xs font-bold uppercase leading-[18px] max-sm:text-[10px] max-sm:leading-[16px]">
                                            {{ $news->category->name }}
                                        </p>
                                    </div>
                                    <img src="{{ Storage::url($news->thumbnail) }}" alt="thumbnail photo"
                                        class="h-full w-full object-cover" />
                                </div>
                                <div class="flex flex-col gap-[6px]">
                                    <h3
                                        class="text-lg font-bold leading-[27px] dark:text-white max-sm:text-base max-sm:leading-[25px]">
                                        {{ substr($news->name, 0, 70) }}{{ strlen($news->name) > 70 ? '...' : '' }}
                                    </h3>
                                    <p class="text-sm leading-[21px] text-[#A3A6AE] max-sm:text-xs">
                                        {{ $news->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="text-center dark:text-zinc-400">No news found</p>
            @endif
        </section>

        <!-- Advertisement -->
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
    </body>

@endsection
