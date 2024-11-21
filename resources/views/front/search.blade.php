@extends('front.master')
@section('content')
<title>{{ config('app.name', 'Laravel') }} | Search: {{ $keyword }}</title>


    <body class="font-[Poppins] dark:bg-[#08080a]">
        <x-navbar />
        <nav id="Category" class="mx-auto mt-[30px] flex max-w-[1130px] items-center justify-center gap-4">
            @foreach ($categories as $item_category)
                <a href="{{ route('front.category', $item_category->slug) }}"
                    class="flex gap-[10px] rounded-lg p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:ring-zinc-700 dark:hover:ring-[#567a94]">
                    <div class="flex h-6 w-6 shrink-0">
                        <img src="{{ Storage::url($item_category->icon) }}" alt="icon" class="dark:invert" />
                    </div>
                    <span class="dark:text-white">{{ $item_category->name }}</span>
                </a>
            @endforeach
        </nav>
        <section id="heading" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col items-center gap-[30px]">
            <h1 class="text-center text-4xl font-bold leading-[45px] dark:text-white">
                Explore Hot Trending <br />
                Good News Today
            </h1>
        </section>
        <section id="search-result"
            class="mx-auto mb-[100px] mt-[70px] flex max-w-[1130px] flex-col items-start gap-[30px]">
            <h2 class="text-[26px] font-bold leading-[39px] dark:text-white">Search Result:
                <span>{{ ucfirst($keyword) }}</span></h2>
            @if ($articles->isNotEmpty())
                <div id="search-cards" class="grid grid-cols-3 gap-[30px]">
                    @foreach ($articles as $news)
                        <a href="{{ route('front.details', $news->slug) }}" class="card">
                            <div
                                class="flex flex-col gap-4 rounded-[20px] bg-transparent p-[26px_20px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:ring-zinc-700 dark:hover:ring-[#567a94]">
                                <div class="thumbnail-container relative h-[200px] overflow-hidden rounded-[20px]">
                                    <div
                                        class="badge absolute bottom-auto left-5 right-auto top-5 flex rounded-[50px] bg-white p-[8px_18px]">
                                        <p class="text-xs font-bold uppercase leading-[18px]">{{ $news->category->name }}
                                        </p>
                                    </div>
                                    <img src="{{ Storage::url($news->thumbnail) }}" alt="thumbnail photo"
                                        class="h-full w-full object-cover" />
                                </div>
                                <div class="flex flex-col gap-[6px]">
                                    <h3 class="text-lg font-bold leading-[27px] dark:text-white">
                                        {{ substr($news->name, 0, 70) }}{{ strlen($news->name) > 70 ? '...' : '' }}</h3>
                                    <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                        {{ $news->created_at->format('d M Y') }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="text-center dark:text-zinc-400">No news found</p>
            @endif
        </section>
    </body>

@endsection
