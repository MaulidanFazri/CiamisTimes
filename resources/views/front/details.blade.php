@extends('front.master')
@section('content')
    <title>{{ config('app.name', 'Laravel') }} | {{ $articleNews->name }}</title>


    <body class="bg-white font-[Poppins] transition-all duration-150 dark:bg-[#08080a]">
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

        <!-- Article -->
        <header class="mt-[70px] flex flex-col items-center gap-[50px] max-sm:mt-[50px] max-sm:gap-[35px]">
            <div id="Headline" class="mx-auto flex max-w-[1130px] flex-col items-center gap-4 max-sm:mx-5">
                <p class="w-fit text-[#A3A6AE] max-sm:text-xs">{{ $articleNews->created_at->format('d M Y') }} •
                    {{ $articleNews->category->name }}</p>
                <h1 id="Title"
                    class="two-lines text-center text-[46px] font-bold leading-[60px] dark:text-white max-sm:text-3xl">
                    {{ $articleNews->name }}</h1>
                <div class="flex items-center justify-center gap-[70px]">
                    <a id="Author" href="{{ route('front.author', $articleNews->author->slug) }}" class="h-fit w-fit">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 overflow-hidden rounded-full max-sm:h-9 max-sm:w-9">
                                <img src="{{ Storage::url($articleNews->author->avatar) }}"
                                    class="h-full w-full object-cover" alt="avatar">
                            </div>

                            <!-- Author -->
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold leading-[21px] dark:text-white max-sm:text-xs">
                                    {{ $articleNews->author->name }}</p>
                                <p class="text-xs leading-[18px] text-[#A3A6AE] max-sm:text-[10px]">
                                    {{ $articleNews->author->occupation }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Thumbnail -->
            <div class="flex h-[500px] w-full shrink-0 overflow-hidden max-sm:h-[400px]">
                <img src="{{ Storage::url($articleNews->thumbnail) }}" class="h-full w-full object-cover"
                    alt="cover thumbnail">
            </div>
        </header>

        <!-- Article -->
        <section id="Article-container"
            class="mx-auto mt-[50px] flex max-w-[1130px] gap-20 max-[1130px]:mx-5 max-[900px]:gap-16 max-[750px]:gap-12">
            <article id="Content-wrapper" class="dark:text-white max-sm:text-xs">
                {!! $articleNews->content !!}
            </article>

            <!-- Side Bar -->
            <div
                class="side-bar flex w-[300px] shrink-0 flex-col gap-10 max-[900px]:w-[250px] max-[900px]:gap-8 max-[750px]:w-[200px] max-[750px]:gap-6 max-sm:hidden">

                <!-- Ads 1 -->
                <div class="ads flex w-full flex-col gap-3">
                    <a href="{{ $square_ads_1->link }}">
                        <img src="{{ Storage::url($square_ads_1->thumbnail) }}" class="h-full w-full object-contain"
                            alt="ads" />
                    </a>
                    <p
                        class="flex gap-1 text-sm font-medium leading-[21px] text-[#A3A6AE] max-[900px]:text-[12px] max-[750px]:text-[10px]">
                        Our Advertisement <a
                            href="mailto:ciamistimes@gmail.com?subject=Pemesanan%20Pemasangan%20Iklan%20di%20Ciamis%20Times&body=Kepada%20Tim%20Ciamis%20Times%2C%0A%0ASaya%20ingin%20melakukan%20pemesanan%20untuk%20pemasangan%20iklan%20di%20situs%20web%20Ciamis%20Times.%20Berikut%20adalah%20informasi%20terkait%20pemesanan%20iklan%3A%0A%0A-%20Nama%20Perusahaan%3A%20%5BNama%20Perusahaan%5D%0A-%20Jenis%20Iklan%3A%20%5BBanner%2C%20Square%5D%0A-%20Durasi%20Pemasangan%20Iklan%3A%20%5BBerapa%20Lama%20Iklan%20Akan%20Tayang%5D%0A-%20Anggaran%3A%20%5BAnggaran%20untuk%20Iklan%5D%0A-%20Kontak%20Person%3A%20%5BNama%20Kontak%20Person%5D%0A-%20Email%20Kontak%20Person%3A%20%5BEmail%20Kontak%20Person%5D%0A-%20Telepon%20Kontak%20Person%3A%20%5BNomor%20Telepon%20Kontak%20Person%5D%0A%0AMohon%20informasi%20lebih%20lanjut%20mengenai%20prosedur%20dan%20harga%20pemasangan%20iklan%20di%20Ciamis%20Times%2C%20serta%20syarat%20dan%20ketentuan%20yang%20berlaku.%0A%0ATerima%20kasih%20atas%20perhatian%20dan%20kerjasamanya.%20Saya%20menunggu%20balasan%20dari%20Tim%20Ciamis%20Times.%0A%0AHormat%20saya%2C%0A%5BNama%20Anda%5D%0A%5BPerusahaan%20Anda%20(jika%20ada)%5D"
                            class="h-[18px] w-[18px] max-[900px]:h-[16px] max-[900px]:w-[16px] max-[750px]:h-[12px] max-[750px]:w-[12px]"><img
                                src="{{ asset('assets/images/icons/message-question.svg') }}" alt="icon" /></a>
                    </p>
                </div>
                <div id="More-from-author" class="flex flex-col gap-4 max-[900px]:gap-3 max-[750px]:gap-2">
                    <p class="font-bold dark:text-white max-[900px]:text-[14px] max-[750px]:text-[12px]">More From Author
                    </p>

                    <!-- Author News -->
                    @forelse($author_news as $item_news)
                        <a href="{{ route('front.details', $item_news->slug) }}" class="card-from-author">
                            <div
                                class="flex gap-4 rounded-[20px] bg-transparent p-[14px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93] max-[900px]:gap-3 max-[900px]:p-[12px] max-[750px]:gap-2 max-[750px]:p-[10px]">
                                <div
                                    class="flex h-[70px] w-[70px] shrink-0 overflow-hidden rounded-2xl max-[900px]:h-[60px] max-[900px]:w-[60px] max-[750px]:h-[50px] max-[750px]:w-[50px]">
                                    <img src="{{ Storage::url($item_news->thumbnail) }}" class="h-full w-full object-cover"
                                        alt="thumbnail">
                                </div>
                                <div class="flex flex-col gap-[6px] max-[900px]:gap-[4px] max-[750px]:gap-[2px]">
                                    <p
                                        class="line-clamp-2 font-bold dark:text-white max-[900px]:text-[14px] max-[750px]:text-[12px]">
                                        {{ substr($item_news->name, 0, 50) }}{{ strlen($item_news->name) > 50 ? '...' : '' }}
                                    </p>
                                    <p
                                        class="text-xs leading-[18px] text-[#A3A6AE] max-[900px]:text-[10px] max-[750px]:text-[8px]">
                                        {{ $item_news->created_at->format('d M Y') }} • {{ $item_news->category->name }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p class="dark:text-zinc-400">No news found</p>
                    @endforelse
                </div>

                <!-- Advertisement -->
                <div class="ads flex w-full flex-col gap-3">
                    <a href="{{ $square_ads_2->link }}">
                        <img src="{{ Storage::url($square_ads_2->thumbnail) }}" class="h-full w-full object-contain"
                            alt="ads" />
                    </a>
                    <p
                        class="flex gap-1 text-sm font-medium leading-[21px] text-[#A3A6AE] max-[900px]:text-[12px] max-[750px]:text-[10px]">
                        Our Advertisement <a
                            href="mailto:ciamistimes@gmail.com?subject=Pemesanan%20Pemasangan%20Iklan%20di%20Ciamis%20Times&body=Kepada%20Tim%20Ciamis%20Times%2C%0A%0ASaya%20ingin%20melakukan%20pemesanan%20untuk%20pemasangan%20iklan%20di%20situs%20web%20Ciamis%20Times.%20Berikut%20adalah%20informasi%20terkait%20pemesanan%20iklan%3A%0A%0A-%20Nama%20Perusahaan%3A%20%5BNama%20Perusahaan%5D%0A-%20Jenis%20Iklan%3A%20%5BBanner%2C%20Square%5D%0A-%20Durasi%20Pemasangan%20Iklan%3A%20%5BBerapa%20Lama%20Iklan%20Akan%20Tayang%5D%0A-%20Anggaran%3A%20%5BAnggaran%20untuk%20Iklan%5D%0A-%20Kontak%20Person%3A%20%5BNama%20Kontak%20Person%5D%0A-%20Email%20Kontak%20Person%3A%20%5BEmail%20Kontak%20Person%5D%0A-%20Telepon%20Kontak%20Person%3A%20%5BNomor%20Telepon%20Kontak%20Person%5D%0A%0AMohon%20informasi%20lebih%20lanjut%20mengenai%20prosedur%20dan%20harga%20pemasangan%20iklan%20di%20Ciamis%20Times%2C%20serta%20syarat%20dan%20ketentuan%20yang%20berlaku.%0A%0ATerima%20kasih%20atas%20perhatian%20dan%20kerjasamanya.%20Saya%20menunggu%20balasan%20dari%20Tim%20Ciamis%20Times.%0A%0AHormat%20saya%2C%0A%5BNama%20Anda%5D%0A%5BPerusahaan%20Anda%20(jika%20ada)%5D"
                            class="h-[18px] w-[18px] max-[900px]:h-[16px] max-[900px]:w-[16px] max-[750px]:h-[12px] max-[750px]:w-[12px]"><img
                                src="{{ asset('assets/images/icons/message-question.svg') }}" alt="icon" /></a>
                    </p>
                </div>
            </div>
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

        <!--Another Article -->
        <section id="Up-to-date"
            class="dark:opacity-65 mt-[70px] flex w-full justify-center bg-[#F9F9FC] py-[50px] dark:bg-zinc-800 max-sm:mt-[50px]">
            <div class="mx-auto flex max-w-[1130px] flex-col gap-[30px] max-[1130px]:mx-5 max-sm:gap-[20px]">
                <div class="flex items-center justify-between">
                    <h2 class="text-[26px] font-bold leading-[39px] dark:text-white max-sm:text-[20px]">
                        Other News You <br />
                        Might Be Interested
                    </h2>
                </div>
                <div class="flex flex-wrap justify-center gap-[30px] max-sm:gap-[20px]">
                    @forelse ($articles as $article)
                        <a href="{{ route('front.details', $article->slug) }}"
                            class="card-news w-full sm:w-1/2 md:w-1/3 lg:w-[350px]">
                            <div
                                class="flex flex-col gap-4 rounded-[20px] bg-transparent p-[26px_20px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93] max-sm:p-[24px_18px]">
                                <div
                                    class="thumbnail-container relative flex h-[200px] w-full shrink-0 overflow-hidden rounded-[20px] max-sm:h-[180px]">
                                    <p
                                        class="badge-white absolute left-5 top-5 rounded-full bg-white p-[8px_18px] text-xs font-bold uppercase leading-[18px] max-sm:p-[6px_14px] max-sm:text-[10px] max-sm:leading-[16px]">
                                        {{ $article->category->name }}</p>
                                    <img src="{{ Storage::url($article->thumbnail) }}" class="h-full w-full object-cover"
                                        alt="thumbnail" />
                                </div>
                                <div class="card-info flex flex-col gap-[6px]">
                                    <h3
                                        class="text-lg font-bold leading-[27px] dark:text-white max-sm:text-base max-sm:leading-[25px]">
                                        {{ substr($article->name, 0, 70) }}{{ strlen($article->name) > 70 ? '...' : '' }}
                                    </h3>
                                    <p class="text-sm leading-[21px] text-[#A3A6AE] max-sm:text-xs">
                                        {{ $article->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p class="dark:text-zinc-400">No articles</p>
                    @endforelse

                </div>
            </div>
        </section>
    </body>
@endsection
@push('after-styles')
    <link rel="stylesheet" href="{{ asset('flickity.min.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
@endpush
@push('after-scripts')
    <script src="{{ asset('js/two-lines-text.js') }}"></script>
@endpush
