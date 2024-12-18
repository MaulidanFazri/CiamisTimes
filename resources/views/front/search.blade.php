@extends('front.master')
@section('content')
<title>{{ config('app.name', 'Laravel') }} | Search: {{ $keyword }}</title>


    <body class="font-[Poppins] dark:bg-[#08080a]">
        <x-navbar />
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
        <section id="heading" class="mx-auto mt-[70px] max-sm:mt-[50px] flex max-w-[1130px] flex-col items-center gap-[30px] max-sm:gap-[20px]">
            <h1 class="text-center text-4xl max-sm:text-3xl font-bold leading-[45px] dark:text-white max-sm:mx-5">
                Explore Hot Trending <br />
                Good News Today
            </h1>
        </section>
        <section id="search-result"
            class="mx-auto mb-[100px] mt-[70px] max-sm:mt-[50px] flex max-w-[1130px] flex-col items-start gap-[30px] max-sm:gap-[20px] max-[1130px]:mx-5">
            <h2 class="text-[26px] max-sm:text-xl font-bold leading-[39px] dark:text-white">Search Result:
                <span>{{ ucfirst($keyword) }}</span></h2>
            @if ($articles->isNotEmpty())
                <div id="search-cards" class=" flex flex-wrap justify-center gap-[30px] max-sm:gap-[20px]">
                    @foreach ($articles as $news)
                        <a href="{{ route('front.details', $news->slug) }}" class="card-news w-full sm:w-1/2 md:w-1/3 lg:w-[350px]">
                            <div
                                class="flex flex-col gap-4 rounded-[20px] bg-transparent p-[26px_20px] max-sm:p-[24px_18px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#733d93] dark:ring-zinc-700 dark:hover:ring-[#733d93]">
                                <div class="thumbnail-container relative h-[200px] overflow-hidden rounded-[20px] max-sm:h-[180px]">
                                    <div
                                        class="badge absolute bottom-auto left-5 right-auto top-5 flex rounded-[50px] bg-white p-[8px_18px] max-sm:p-[6px_14px] ">
                                        <p class="text-xs font-bold uppercase leading-[18px]  max-sm:text-[10px] max-sm:leading-[16px]">
                                            {{ $news->category->name }}
                                        </p>
                                    </div>
                                    <img src="{{ Storage::url($news->thumbnail) }}" alt="thumbnail photo"
                                        class="h-full w-full object-cover" />
                                </div>
                                <div class="flex flex-col gap-[6px]">
                                    <h3 class="text-lg font-bold leading-[27px] dark:text-white max-sm:text-base max-sm:leading-[25px]">
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
    </body>

@endsection
