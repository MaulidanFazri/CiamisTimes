@extends('front.master')
@section('content')
    <title>{{ config('app.name', 'Laravel') }}</title>

    <body class="bg-white font-[Poppins] transition-all duration-150 dark:bg-[#08080a]">
        <x-navbar />
        <nav id="Category" class="mx-auto mt-[30px] flex max-w-[1130px] items-center justify-center gap-4">
            @foreach ($categories as $category)
                <a href="{{ route('front.category', $category->slug) }}"
                    class="flex gap-[10px] rounded-lg p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:ring-zinc-700 dark:hover:ring-[#567a94]">
                    <div class="flex h-6 w-6 shrink-0">
                        <img src="{{ Storage::url($category->icon) }}" alt="icon" class="dark:invert" />
                    </div>
                    <span class="dark:text-white">{{ $category->name }}</span>
                </a>
            @endforeach
        </nav>
        <section id="heading" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col items-center gap-[30px]">
            <h1 class="text-center text-4xl font-bold leading-[45px] dark:text-white">
                Disclaimer
            </h1>
        </section>
        <section id="Article-container" class="mx-auto mt-[50px] flex max-w-[1130px] gap-20">
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
