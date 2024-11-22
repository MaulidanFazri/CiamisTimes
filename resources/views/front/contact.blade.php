@extends('front.master')
@section('content')
    <title>{{ config('app.name', 'Laravel') }}</title>

    <body class="bg-white font-[Poppins] transition-all duration-150 dark:bg-[#08080a]">
        <x-navbar />
        <nav id="Category" class="mx-auto mt-[30px] flex max-w-[1130px] items-center justify-center gap-4">
            @foreach ($categories as $category)
                <a href="{{ route('front.category', $category->slug) }}"
                    class="flex gap-[10px] rounded-full p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93]">
                    <div class="flex h-6 w-6 shrink-0">
                        <img src="{{ Storage::url($category->icon) }}" alt="icon" class="dark:invert" />
                    </div>
                    <span class="dark:text-white">{{ $category->name }}</span>
                </a>
            @endforeach
        </nav>
        <section id="heading" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col items-center gap-[30px]">
            <h1 class="text-center text-4xl font-bold leading-[45px] dark:text-white">
                Contact Us
            </h1>
        </section>
        <section id="Article-container" class="mx-auto mt-[50px] flex max-w-[1130px] gap-20">
            <article id="Content-wrapper" class="text-justify dark:text-white">
                <p class="text-sm text-zinc-400">
                    Terakhir diperbarui:
                    {{ \Carbon\Carbon::createFromTimestamp(filemtime(__FILE__))->format('d F Y') }}
                </p>
                <p>Masukan seputar layanan silahkan hubungi kami melalui email <a
                        href="mailto:ciamistimes@gmail.com">ciamistimes@gmail.com</a>, tim kami akan berusaha secepat
                    mungkin
                    merespons email Anda.<br><br>Jika ingin berkontribusi, pastikan kamu telah membaca panduan kontributor,
                    lalu
                    gunakan formulir di bawah atau alamat email untuk menghubungi kami.<br><br>Perlu untuk diketahui, kami
                    slow
                    respon saat akhir pekan, namun kamu tetap dapat menghubungi, dan tim kami akan membalasnya secepat
                    mungkin.<br><br><b>Terima kasih!</b>
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
