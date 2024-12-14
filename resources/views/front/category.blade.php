@extends('front.master')
@section('content')
    <title>{{ config('app.name', 'Laravel') }} | {{ $category->name }}</title>

    <body class="bg-white font-[Poppins] transition-all duration-150 dark:bg-[#08080a]">
        <x-navbar />
        <nav id="Category" class="mx-auto mt-[30px] flex max-w-[1130px] items-center justify-center gap-4">
            @foreach ($categories as $item_category)
                <a href="{{ route('front.category', $item_category->slug) }}"
                    class="flex gap-[10px] rounded-full p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93]">
                    <div class="flex h-6 w-6 shrink-0">
                        <img src="{{ Storage::url($item_category->icon) }}" alt="icon" class="dark:invert" />
                    </div>
                    <span class="dark:text-white">{{ $item_category->name }}</span>
                </a>
            @endforeach
        </nav>
        <section id="Category-result" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col items-center gap-[30px]">
            <h1 class="text-center text-4xl font-bold leading-[45px] dark:text-white">
                Explore Our <br />
                {{ $category->name }} News
            </h1>
            @if ($category->news->isNotEmpty())
                <div id="search-cards" class="grid grid-cols-3 gap-[30px]">
                    @foreach ($category->news as $news)
                        <a href="{{ route('front.details', $news->slug) }}" class="card">
                            <div
                                class="flex flex-col gap-4 rounded-[20px] bg-transparent p-[26px_20px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93]">
                                <div class="thumbnail-container relative h-[200px] overflow-hidden rounded-[20px]">
                                    <div
                                        class="badge absolute bottom-auto left-5 right-auto top-5 flex rounded-[50px] bg-white p-[8px_18px]">
                                        <p class="text-xs font-bold uppercase leading-[18px]">
                                            {{ $news->category->name }}
                                        </p>
                                    </div>
                                    <img src="{{ Storage::url($news->thumbnail) }}" alt="thumbnail photo"
                                        class="h-full w-full object-cover" />
                                </div>
                                <div class="flex flex-col gap-[6px]">
                                    <h3 class="text-lg font-bold leading-[27px] dark:text-white">
                                        {{ substr($news->name, 0, 70) }}{{ strlen($news->name) > 70 ? '...' : '' }}
                                    </h3>
                                    <p class="text-sm leading-[21px] text-[#A3A6AE]">
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
    </body>

@endsection
