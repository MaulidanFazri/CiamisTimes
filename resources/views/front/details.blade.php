@extends('front.master')
@section('content')
    <title>{{ config('app.name', 'Laravel') }} | {{ $articleNews->name }}</title>


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
        <header class="mt-[70px] flex flex-col items-center gap-[50px]">
            <div id="Headline" class="mx-auto flex max-w-[1130px] flex-col items-center gap-4">
                <p class="w-fit text-[#A3A6AE]">{{ $articleNews->created_at->format('d M Y') }} •
                    {{ $articleNews->category->name }}</p>
                <h1 id="Title" class="two-lines text-center text-[46px] font-bold leading-[60px] dark:text-white">
                    {{ $articleNews->name }}</h1>
                <div class="flex items-center justify-center gap-[70px]">
                    <a id="Author" href="{{ route('front.author', $articleNews->author->slug) }}" class="h-fit w-fit">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 overflow-hidden rounded-full">
                                <img src="{{ Storage::url($articleNews->author->avatar) }}"
                                    class="h-full w-full object-cover" alt="avatar">
                            </div>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold leading-[21px] dark:text-white">
                                    {{ $articleNews->author->name }}</p>
                                <p class="text-xs leading-[18px] text-[#A3A6AE]">{{ $articleNews->author->occupation }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex h-[500px] w-full shrink-0 overflow-hidden">
                <img src="{{ Storage::url($articleNews->thumbnail) }}" class="h-full w-full object-cover"
                    alt="cover thumbnail">
            </div>
        </header>
        <section id="Article-container" class="mx-auto mt-[50px] flex max-w-[1130px] gap-20">
            <article id="Content-wrapper" class="dark:text-white">
                {!! $articleNews->content !!}
            </article>
            <div class="side-bar flex w-[300px] shrink-0 flex-col gap-10">
                <div class="ads flex w-full flex-col gap-3">
                    <a href="{{ $square_ads_1->link }}">
                        <img src="{{ Storage::url($square_ads_1->thumbnail) }}" class="h-full w-full object-contain"
                            alt="ads" />
                    </a>
                    <p class="flex gap-1 text-sm font-medium leading-[21px] text-[#A3A6AE]">
                        Our Advertisement <a href="#" class="h-[18px] w-[18px]"><img
                                src="{{ asset('assets/images/icons/message-question.svg') }}" alt="icon" /></a>
                    </p>
                </div>
                <div id="More-from-author" class="flex flex-col gap-4">
                    <p class="font-bold">More From Author</p>

                    @forelse($author_news as $item_news)
                        <a href="{{ route('front.details', $item_news->slug) }}" class="card-from-author">
                            <div
                                class="flex gap-4 rounded-[20px] bg-transparent p-[14px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:ring-zinc-700 dark:hover:ring-[#567a94]">
                                <div class="flex h-[70px] w-[70px] shrink-0 overflow-hidden rounded-2xl">
                                    <img src="{{ Storage::url($item_news->thumbnail) }}" class="h-full w-full object-cover"
                                        alt="thumbnail">
                                </div>
                                <div class="flex flex-col gap-[6px]">
                                    <p class="line-clamp-2 font-bold dark:text-white">
                                        {{ substr($item_news->name, 0, 50) }}{{ strlen($item_news->name) > 50 ? '...' : '' }}
                                    </p>
                                    <p class="text-xs leading-[18px] text-[#A3A6AE]">
                                        {{ $item_news->created_at->format('d M Y') }} • {{ $item_news->category->name }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p class="dark:text-zinc-400">No news found</p>
                    @endforelse

                </div>
                <div class="ads flex w-full flex-col gap-3">
                    <a href="{{ $square_ads_2->link }}">
                        <img src="{{ Storage::url($square_ads_2->thumbnail) }}" class="h-full w-full object-contain"
                            alt="ads" />
                    </a>
                    <p class="flex gap-1 text-sm font-medium leading-[21px] text-[#A3A6AE]">
                        Our Advertisement <a href="#" class="h-[18px] w-[18px]"><img
                                src="{{ asset('assets/images/icons/message-question.svg') }}" alt="icon" /></a>
                    </p>
                </div>
            </div>
        </section>
        <section id="Advertisement" class="mx-auto mt-[70px] flex max-w-[1130px] justify-center">
            <div class="flex w-fit shrink-0 flex-col gap-3">
                <a href="{{ $bannerads->link }}">
                    <div
                        class="flex h-[120px] w-[900px] shrink-0 overflow-hidden rounded-2xl ring-1 ring-[#EEF0F7] transition-all duration-100 dark:ring-zinc-800">
                        <img src="{{ Storage::url($bannerads->thumbnail) }}" class="h-full w-full object-cover"
                            alt="ads" />
                    </div>
                </a>
                <p
                    class="flex gap-1 text-sm font-medium leading-[21px] text-[#A3A6AE] transition-all duration-100 dark:text-zinc-400">
                    Our Advertisement <a href="#" class="h-[18px] w-[18px]"><img
                            src="{{ asset('assets/images/icons/message-question.svg') }}" alt="icon" /></a>
                </p>
            </div>
        </section>
        <section id="Up-to-date"
            class="mt-[70px] flex w-full justify-center bg-[#F9F9FC] py-[50px] dark:bg-zinc-800 dark:bg-opacity-80">
            <div class="mx-auto flex max-w-[1130px] flex-col gap-[30px]">
                <div class="flex items-center justify-between">
                    <h2 class="text-[26px] font-bold leading-[39px] dark:text-white">
                        Other News You <br />
                        Might Be Interested
                    </h2>
                </div>
                <div class="grid grid-cols-3 gap-[30px]">
                    @forelse ($articles as $article)
                        <a href="{{ route('front.details', $article->slug) }}" class="card-news">
                            <div
                                class="flex flex-col gap-4 rounded-[20px] bg-transparent p-[26px_20px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:ring-zinc-700 dark:hover:ring-[#567a94]">
                                <div
                                    class="thumbnail-container relative flex h-[200px] w-full shrink-0 overflow-hidden rounded-[20px]">
                                    <p
                                        class="badge-white absolute left-5 top-5 rounded-full bg-white p-[8px_18px] text-xs font-bold uppercase leading-[18px]">
                                        {{ $article->category->name }}</p>
                                    <img src="{{ Storage::url($article->thumbnail) }}" class="h-full w-full object-cover"
                                        alt="thumbnail" />
                                </div>
                                <div class="card-info flex flex-col gap-[6px]">
                                    <h3 class="text-lg font-bold leading-[27px] dark:text-white">
                                        {{ substr($article->name, 0, 70) }}{{ strlen($article->name) > 70 ? '...' : '' }}
                                    </h3>
                                    <p class="text-sm leading-[21px] text-[#A3A6AE]">
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
