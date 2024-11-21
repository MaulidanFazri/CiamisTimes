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
                Privacy Policy
            </h1>
        </section>
        <section id="Article-container" class="mx-auto mt-[50px] flex max-w-[1130px] gap-20">
            <article id="Content-wrapper" class="text-justify dark:text-white">
                <p class="text-sm text-zinc-400">
                    Terakhir diperbarui:
                    {{ \Carbon\Carbon::createFromTimestamp(filemtime(__FILE__))->format('d F Y') }}
                </p>
                <p>Ciamis Times menghormati privasi pengguna dan berkomitmen untuk melindungi informasi pribadi yang Anda
                    berikan kepada kami. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan
                    melindungi data Anda saat menggunakan situs web kami.<br><br>

                    Kami mengumpulkan informasi pribadi yang Anda berikan secara sukarela, seperti nama, alamat email, atau
                    nomor telepon saat Anda mendaftar atau menghubungi kami. Selain itu, kami juga dapat mengumpulkan
                    informasi secara otomatis, seperti alamat IP, jenis perangkat yang Anda gunakan, sistem operasi, dan
                    aktivitas di situs melalui penggunaan cookies atau teknologi serupa. Informasi ini membantu kami
                    memahami kebutuhan pengguna serta meningkatkan pengalaman layanan.<br><br>

                    Kami menggunakan informasi Anda untuk memberikan layanan terbaik, mengirimkan berita terbaru atau
                    pemberitahuan penting, serta menganalisis penggunaan situs untuk perbaikan lebih lanjut. Data pribadi
                    Anda tidak akan dijual, disewakan, atau dibagikan kepada pihak ketiga kecuali diwajibkan oleh
                    hukum.<br><br>

                    Untuk melindungi data Anda, kami menerapkan langkah-langkah keamanan teknis dan administratif guna
                    mencegah akses yang tidak sah, kehilangan data, atau penyalahgunaan. Meskipun begitu, kami menyadari
                    bahwa tidak ada sistem keamanan yang sepenuhnya sempurna, dan kami tidak dapat menjamin keamanan absolut
                    atas data Anda.<br><br>

                    Situs web kami mungkin menyertakan tautan ke situs lain. Harap diketahui bahwa kami tidak bertanggung
                    jawab atas kebijakan privasi atau konten di situs pihak ketiga tersebut. Kami menyarankan Anda untuk
                    membaca kebijakan privasi masing-masing situs sebelum memberikan informasi pribadi Anda.<br><br>

                    Ciamis Times dapat mengubah Kebijakan Privasi ini sewaktu-waktu sesuai kebutuhan. Setiap pembaruan akan
                    diumumkan melalui situs web ini. Dengan terus menggunakan layanan kami, Anda dianggap telah membaca dan
                    menyetujui perubahan dalam kebijakan ini.<br><br>

                    Jika Anda memiliki pertanyaan, saran, atau keluhan terkait privasi Anda, jangan ragu untuk menghubungi
                    kami melalui email di <a href="mailto:ciamistimes@gmail.com">ciamistimes@gmail.com</a>.<br><br>

                    Terima kasih atas kepercayaan Anda kepada Ciamis Times. Kami berkomitmen untuk terus menjaga privasi
                    Anda.
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