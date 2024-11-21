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
                Terms & Conditions
            </h1>
        </section>
        <section id="Article-container" class="mx-auto mt-[50px] flex max-w-[1130px] gap-20">
            <article id="Content-wrapper" class="text-justify dark:text-white">
                <p class="text-sm text-zinc-400">
                    Terakhir diperbarui:
                    {{ \Carbon\Carbon::createFromTimestamp(filemtime(__FILE__))->format('d F Y') }}
                </p>
                <p>
                    Selamat datang di situs Ciamis Times. Dengan mengakses atau menggunakan layanan kami, Anda menyatakan
                    setuju untuk mematuhi syarat dan ketentuan yang berlaku. Jika Anda tidak setuju dengan bagian mana pun
                    dari syarat dan ketentuan ini, harap untuk tidak melanjutkan penggunaan situs ini.<br><br>

                    Layanan dan konten yang tersedia di situs ini hanya diperuntukkan untuk keperluan pribadi dan
                    non-komersial. Segala bentuk penyalinan, reproduksi, modifikasi, atau distribusi konten tanpa izin
                    tertulis dari Ciamis Times dilarang. Semua hak cipta, termasuk teks, gambar, video, dan logo, adalah
                    milik Ciamis Times atau pihak ketiga yang memberikan lisensi kepada kami, dan dilindungi oleh hukum yang
                    berlaku.<br><br>

                    Kami berusaha menyajikan informasi yang akurat dan terkini, tetapi kami tidak menjamin bahwa semua
                    informasi bebas dari kesalahan atau kelalaian. Pengguna bertanggung jawab sepenuhnya atas risiko yang
                    terkait dengan penggunaan informasi di situs ini.<br><br>

                    Situs ini dapat memuat tautan ke situs pihak ketiga yang bertujuan memberikan informasi tambahan. Kami
                    tidak memiliki kendali atas konten atau kebijakan privasi situs-situs tersebut dan tidak bertanggung
                    jawab atas kerugian atau masalah yang mungkin timbul akibat penggunaan tautan eksternal
                    tersebut.<br><br>

                    Ciamis Times tidak bertanggung jawab atas segala kerugian, baik langsung maupun tidak langsung, yang
                    diakibatkan oleh penggunaan layanan atau konten situs ini. Semua layanan dan konten disediakan
                    "sebagaimana adanya" tanpa jaminan apa pun.<br><br>

                    Kami berhak untuk mengubah atau memperbarui syarat dan ketentuan ini kapan saja tanpa pemberitahuan
                    sebelumnya. Segala perubahan akan berlaku segera setelah dipublikasikan di situs ini. Pengguna
                    diharapkan untuk memeriksa halaman ini secara berkala agar tetap mengetahui ketentuan terbaru.<br><br>

                    Syarat dan ketentuan ini tunduk pada hukum yang berlaku di Indonesia. Segala sengketa yang mungkin
                    timbul dari penggunaan situs ini akan diselesaikan berdasarkan hukum yang berlaku di yurisdiksi
                    tersebut.<br><br>

                    Apabila Anda memiliki pertanyaan lebih lanjut terkait syarat dan ketentuan ini, silakan menghubungi kami
                    melalui email di <a href="mailto:ciamistimes@gmail.com">ciamistimes@gmail.com</a>. Dengan menggunakan
                    layanan ini, Anda dianggap telah membaca,
                    memahami, dan menyetujui semua ketentuan yang berlaku.
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