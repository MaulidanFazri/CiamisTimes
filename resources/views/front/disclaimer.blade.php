@extends('front.master')
@section('content')
    <title>{{ config('app.name', 'Laravel') }}</title>

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

        <!-- Heading -->
        <section id="heading" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col items-center gap-[30px]">
            <h1 class="text-center text-4xl font-bold leading-[45px] dark:text-white">
                Disclaimer
            </h1>
        </section>

        <!-- Article -->
        <section id="Article-container" class="mx-5 mt-[50px] flex max-w-[1130px] gap-20">
            <article id="Content-wrapper" class="text-justify dark:text-white">
                <p class="text-sm text-zinc-400">
                    Terakhir diperbarui:
                    {{ \Carbon\Carbon::createFromTimestamp(filemtime(__FILE__))->format('d F Y') }}
                </p>
                <p>
                    Konten yang disediakan di situs Ciamis Times disajikan semata-mata untuk tujuan informasi umum. Kami
                    berupaya memberikan informasi yang akurat dan terkini, tetapi tidak memberikan jaminan, baik secara
                    tersurat maupun tersirat, tentang kelengkapan, keakuratan, atau kesesuaian informasi untuk tujuan
                    tertentu. Setiap tindakan yang Anda ambil berdasarkan informasi yang ditemukan di situs ini sepenuhnya
                    merupakan tanggung jawab Anda sendiri, dan kami tidak bertanggung jawab atas kerugian atau kerusakan
                    yang mungkin timbul.<br><br>

                    Situs ini mungkin berisi tautan ke situs eksternal yang tidak berada di bawah kendali kami. Kehadiran
                    tautan tersebut tidak menyiratkan rekomendasi atau dukungan terhadap konten yang tersedia di situs
                    eksternal tersebut. Kami tidak bertanggung jawab atas isi, kebijakan, atau tindakan yang terkait dengan
                    situs pihak ketiga.<br><br>

                    Pandangan dan opini yang disampaikan dalam artikel atau tulisan lainnya di situs ini sepenuhnya
                    merupakan tanggung jawab penulis dan tidak selalu mencerminkan pandangan resmi Ciamis Times.<br><br>

                    Kami tidak bertanggung jawab atas segala gangguan teknis, termasuk namun tidak terbatas pada, kegagalan
                    jaringan atau sistem yang dapat memengaruhi aksesibilitas situs ini. Selain itu, kami berhak untuk
                    mengubah, menghapus, atau memperbarui konten di situs ini kapan saja tanpa pemberitahuan
                    sebelumnya.<br><br>

                    Dengan menggunakan situs ini, Anda memahami dan menyetujui bahwa setiap risiko yang terkait dengan
                    penggunaan informasi atau layanan di situs ini sepenuhnya menjadi tanggung jawab Anda. Jika Anda
                    memiliki pertanyaan lebih lanjut, silakan menghubungi kami di <a
                        href="mailto:ciamistimes@gmail.com">ciamistimes@gmail.com</a>.<br><br>
                </p>

            </article>
        </section>
    </body>
@endsection
@push('after-styles')
    <link rel="stylesheet" href="{{ asset('flickity.min.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
@endpush
