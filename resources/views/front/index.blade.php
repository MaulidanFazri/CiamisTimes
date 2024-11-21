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
        <section id="Featured" class="mt-[30px]">
            <div class="main-carousel w-full">

                @forelse ($featured_articles as $article)
                    <div class="featured-news-card relative flex h-[550px] w-full shrink-0 overflow-hidden">
                        <img src="{{ Storage::url($article->thumbnail) }}"
                            class="thumbnail absolute h-full w-full object-cover" alt="icon" />
                        <div class="absolute z-10 h-full w-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)]">
                        </div>
                        <div
                            class="card-detail relative z-20 mx-auto flex w-full max-w-[1130px] items-end justify-between pb-10">
                            <div class="flex flex-col gap-[10px]">
                                <p class="text-white">Featured</p>
                                <a href="{{ route('front.details', $article->slug) }}"
                                    class="two-lines text-4xl font-bold leading-[45px] text-white transition-all duration-100 hover:underline">{{ $article->name }}</a>
                                <p class="text-white">{{ $article->created_at->format('d M Y') }} •
                                    {{ $article->category->name }}</p>
                            </div>
                            <div class="prevNextButtons mb-[60px] flex items-center gap-4">
                                <button
                                    class="button--previous flex h-[38px] w-[38px] shrink-0 appearance-none items-center justify-center rounded-full ring-1 ring-white transition-all duration-100 hover:ring-2 hover:ring-[#567a94]">
                                    <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" />
                                </button>
                                <button
                                    class="button--next flex h-[38px] w-[38px] shrink-0 rotate-180 appearance-none items-center justify-center rounded-full ring-1 ring-white transition-all duration-100 hover:ring-2 hover:ring-[#567a94]">
                                    <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" />
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="dark:text-zinc-400">No articles</p>
                @endforelse

            </div>
        </section>
        <section id="Up-to-date" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col gap-[30px]">
            <div class="flex items-center justify-between">
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white">
                    Latest Hot News <br />
                    Good for Curiousity
                </h2>
                <p
                    class="badge-orange w-fit rounded-lg bg-[#dcf1ff] p-[8px_18px] text-sm font-bold leading-[21px] text-[#567a94] dark:bg-zinc-700 dark:text-white">
                    UP TO DATE</p>
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
                                    {{ substr($article->name, 0, 70) }}{{ strlen($article->name) > 70 ? '...' : '' }}</h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                    {{ $article->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="dark:text-zinc-400">No articles</p>
                @endforelse

            </div>
        </section>
        <section id="Best-authors" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col gap-[30px]">
            <div class="flex flex-col items-center gap-[14px] text-center">
                <p
                    class="badge-orange w-fit rounded-lg bg-[#dcf1ff] p-[8px_18px] text-sm font-bold leading-[21px] text-[#567a94] dark:bg-zinc-700 dark:text-white">
                    BEST AUTHORS</p>
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white">
                    Explore All Masterpieces <br />
                    Written by People
                </h2>
            </div>
            <div class="grid grid-cols-6 gap-[30px]">

                @forelse ($authors as $author)
                    <a href="{{ route('front.author', $author->slug) }}" class="card-authors">
                        <div
                            class="flex flex-col items-center gap-4 rounded-[20px] bg-transparent p-[26px_20px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:ring-zinc-700 dark:hover:ring-[#567a94]">
                            <div class="flex h-[70px] w-[70px] shrink-0 overflow-hidden rounded-full">
                                <img src="{{ Storage::url($author->avatar) }}" class="h-full w-full object-cover"
                                    alt="avatar" />
                            </div>
                            <div class="flex flex-col gap-1 text-center">
                                <p class="font-semibold dark:text-white">{{ $author->name }}</p>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">{{ $author->news->count() }} News</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="dark:text-zinc-300">No authors</p>
                @endforelse
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
        <section id="Latest-entertainment" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col gap-[30px]">
            <div class="flex items-center justify-between">
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white">
                    Latest For You <br />
                    in Entertainment
                </h2>
                <a href="{{ route('front.category', 'entertainment') }}"
                    class="ho dark flex gap-[10px] rounded-lg p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:text-white dark:ring-zinc-700 dark:hover:ring-[#567a94]">Explore
                    All</a>
            </div>
            <div class="flex h-fit items-center justify-between">
                <div class="featured-news-card relative flex h-[424px] w-full flex-1 overflow-hidden rounded-[20px]">
                    <img src="{{ Storage::url($entertainment_featured_articles->thumbnail) }}"
                        class="thumbnail absolute h-full w-full object-cover" alt="icon" />
                    <div class="absolute z-10 h-full w-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)]">
                    </div>
                    <div class="card-detail relative z-20 flex w-full items-end p-[30px]">
                        <div class="flex flex-col gap-[10px]">
                            <p class="text-white">Featured</p>
                            <a href="{{ route('front.details', $entertainment_featured_articles->slug) }}"
                                class="text-[30px] font-bold leading-[36px] text-white transition-all duration-100 hover:underline">{{ $entertainment_featured_articles->name }}</a>
                            <p class="text-white">{{ $entertainment_featured_articles->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="custom-scrollbar relative h-[424px] w-fit overflow-x-hidden overflow-y-scroll px-5">
                    <div class="flex w-[455px] shrink-0 flex-col gap-5">

                        @forelse ($entertainment_articles as $article)
                            <a href="{{ route('front.details', $article->slug) }}" class="card py-[2px]">
                                <div
                                    class="flex items-center gap-4 rounded-[20px] bg-transparent p-[14px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:ring-zinc-700 dark:hover:ring-[#567a94]">
                                    <div class="flex h-[100px] w-[130px] shrink-0 overflow-hidden rounded-[20px]">
                                        <img src="{{ Storage::url($article->thumbnail) }}"
                                            class="h-full w-full object-cover" alt="thumbnail" />
                                    </div>
                                    <div class="justify-center-center flex flex-col gap-[6px]">
                                        <h3 class="text-lg font-bold leading-[27px]">
                                            {{ substr($article->name, 0, 50) }}{{ strlen($article->name) > 50 ? '...' : '' }}
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
                    <div
                        class="sticky bottom-0 z-10 h-[100px] w-full bg-gradient-to-b from-[rgba(255,255,255,0)] to-[#ffffff] dark:from-[rgba(0,0,0,0)] dark:to-[rgba(0,0,0,0.9)]">
                    </div>
                </div>
            </div>
        </section>
        <section id="Latest-business" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col gap-[30px]">
            <div class="flex items-center justify-between">
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white">
                    Latest For You <br />
                    in Business
                </h2>
                <a href="{{ route('front.category', 'business') }}"
                    class="ho dark flex gap-[10px] rounded-lg p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:text-white dark:ring-zinc-700 dark:hover:ring-[#567a94]">Explore
                    All</a>
            </div>
            <div class="flex h-fit items-center justify-between">
                <div class="featured-news-card relative flex h-[424px] w-full flex-1 overflow-hidden rounded-[20px]">
                    <img src="{{ Storage::url($business_featured_articles->thumbnail) }}"
                        class="thumbnail absolute h-full w-full object-cover" alt="icon" />
                    <div class="absolute z-10 h-full w-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)]">
                    </div>
                    <div class="card-detail relative z-20 flex w-full items-end p-[30px]">
                        <div class="flex flex-col gap-[10px]">
                            <p class="text-white">Featured</p>
                            <a href="{{ route('front.details', $business_featured_articles->slug) }}"
                                class="text-[30px] font-bold leading-[36px] text-white transition-all duration-100 hover:underline">{{ $business_featured_articles->name }}</a>
                            <p class="text-white">{{ $business_featured_articles->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="custom-scrollbar relative h-[424px] w-fit overflow-x-hidden overflow-y-scroll px-5">
                    <div class="flex w-[455px] shrink-0 flex-col gap-5">

                        @forelse ($business_articles as $article)
                            <a href="{{ route('front.details', $article->slug) }}" class="card py-[2px]">
                                <div
                                    class="flex items-center gap-4 rounded-[20px] bg-transparent p-[14px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:ring-zinc-700 dark:hover:ring-[#567a94]">
                                    <div class="flex h-[100px] w-[130px] shrink-0 overflow-hidden rounded-[20px]">
                                        <img src="{{ Storage::url($article->thumbnail) }}"
                                            class="h-full w-full object-cover" alt="thumbnail" />
                                    </div>
                                    <div class="justify-center-center flex flex-col gap-[6px]">
                                        <h3 class="text-lg font-bold leading-[27px] dark:text-white">
                                            {{ substr($article->name, 0, 50) }}{{ strlen($article->name) > 50 ? '...' : '' }}
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
                    <div
                        class="sticky bottom-0 z-10 h-[100px] w-full bg-gradient-to-b from-[rgba(255,255,255,0)] to-[#ffffff] dark:from-[rgba(0,0,0,0)] dark:to-[rgba(0,0,0,0.9)]">
                    </div>
                </div>
            </div>
        </section>
        <section id="Latest-automotive" class="mx-auto mt-[70px] flex max-w-[1130px] flex-col gap-[30px]">
            <div class="flex items-center justify-between">
                <h2 class="text-[26px] font-bold leading-[39px] dark:text-white">
                    Latest For You <br />
                    in Automotive
                </h2>
                <a href="{{ route('front.category', 'automotive') }}"
                    class="ho dark flex gap-[10px] rounded-lg p-[12px_22px] font-semibold ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:text-white dark:ring-zinc-700 dark:hover:ring-[#567a94]">Explore
                    All</a>
            </div>
            <div class="flex h-fit items-center justify-between">
                <div class="featured-news-card relative flex h-[424px] w-full flex-1 overflow-hidden rounded-[20px]">
                    <img src="{{ Storage::url($automotive_featured_articles->thumbnail) }}"
                        class="thumbnail absolute h-full w-full object-cover" alt="icon" />
                    <div class="absolute z-10 h-full w-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)]">
                    </div>
                    <div class="card-detail relative z-20 flex w-full items-end p-[30px]">
                        <div class="flex flex-col gap-[10px]">
                            <p class="text-white">Featured</p>
                            <a href="details.html"
                                class="text-[30px] font-bold leading-[36px] text-white transition-all duration-100 hover:underline">{{ $automotive_featured_articles->name }}</a>
                            <p class="text-white">{{ $automotive_featured_articles->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="custom-scrollbar relative h-[424px] w-fit overflow-x-hidden overflow-y-scroll px-5">
                    <div class="flex w-[455px] shrink-0 flex-col gap-5">

                        @forelse ($automotive_articles as $article)
                            <a href="{{ route('front.details', $article->slug) }}" class="card py-[2px]">
                                <div
                                    class="flex items-center gap-4 rounded-[20px] bg-transparent p-[14px] ring-1 ring-[#EEF0F7] transition-all duration-100 hover:ring-2 hover:ring-[#567a94] dark:ring-zinc-700 dark:hover:ring-[#567a94]">
                                    <div class="flex h-[100px] w-[130px] shrink-0 overflow-hidden rounded-[20px]">
                                        <img src="{{ Storage::url($article->thumbnail) }}"
                                            class="h-full w-full object-cover" alt="thumbnail" />
                                    </div>
                                    <div class="justify-center-center flex flex-col gap-[6px]">
                                        <h3 class="text-lg font-bold leading-[27px] dark:text-white">
                                            {{ substr($article->name, 0, 50) }}{{ strlen($article->name) > 50 ? '...' : '' }}
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
                    <div
                        class="sticky bottom-0 z-10 h-[100px] w-full bg-gradient-to-b from-[rgba(255,255,255,0)] to-[#ffffff] dark:from-[rgba(0,0,0,0)] dark:to-[rgba(0,0,0,0.9)]">
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
@push('after-styles')
    <link rel="stylesheet" href="{{ asset('flickity.min.css') }}">
@endpush

@push('after-scripts')
    <script src="{{ asset('js/two-lines-text.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
@endpush
