<!-- Wrapper start -->
<div id="wrapper" class="wrap overflow-hidden-x">
    <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
        <div class="container max-w-xl">
            <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                <li><a href="{{route('home')}}">Home</a></li>
                @foreach($news->categories as $i => $category)
                    @if($category->ancestors->count())
                        <li><i class="unicon-chevron-right opacity-50"></i></li>

                        <li>
                            <a href="{{route('news.category' ,$category->ancestors[0]->slug)}}">{{implode(' > ', $category->ancestors->pluck('title')->toArray())}}</a>
                        </li>
                    @endif
                    <li><i class="unicon-chevron-right opacity-50"></i></li>
                    <li><a href="{{ route('news.category' , $category->slug) }}">{{ $category->title }}</a></li>
                @endforeach
                {{--                <li><a href="blog-category.html">Strategy</a></li>--}}
                {{--                <li><i class="unicon-chevron-right opacity-50"></i></li>--}}
                {{--                <li><span class="opacity-50">The Rise of Gourmet Street Food: Trends and Top Picks</span></li>--}}
            </ul>
        </div>
    </div>

    <article class="post type-post single-post py-4 lg:py-6 xl:py-9">
        <div class="container max-w-xl">
            <div class="post-header">
                <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center">
                    <div class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-100 mx-auto gap-2 md:gap-3">
                        <h1 class="h4 sm:h2">
                            {{$news->title}}
                        </h1>
                    </div>
                    <figure class="featured-image m-0">
                        <figure class="featured-image m-0 ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                 src="{{$news->img}}"

                                 alt="The Rise of Gourmet Street Food: Trends and Top Picks"
                                 data-uc-img="loading: lazy">
                        </figure>
                    </figure>
                </div>
            </div>
        </div>
        <div class="panel mt-4 lg:mt-6 xl:mt-9">
            <div class="container max-w-xl">
                <div class="post-content panel fs-6 md:fs-4 text-black dark:text-white"
                     data-uc-lightbox="animation: scale">
                    {{$news->description}}
                </div>
                <div class="post-footer panel vstack sm:hstack gap-3 justify-between justifybetween border-top py-4 mt-4 xl:py-9 xl:mt-9">
                    <ul class="nav-x gap-narrow text-primary">
                        <li><span class="text-black dark:text-white me-narrow">Tags:</span></li>
                        <li>
                            <a href="#" class="uc-link gap-0 dark:text-white">Food <span
                                        class="text-black dark:text-white">,</span></a>
                        </li>
                        <li>
                            <a href="#" class="uc-link gap-0 dark:text-white">Life Style <span
                                        class="text-black dark:text-white">,</span></a>
                        </li>
                        <li>
                            <a href="#" class="uc-link gap-0 dark:text-white">Tech <span
                                        class="text-black dark:text-white">,</span></a>
                        </li>
                        <li><a href="#" class="uc-link gap-0 dark:text-white">Travel</a></li>
                    </ul>
                    <ul class="post-share-icons nav-x gap-narrow">
                        <li class="me-1"><span class="text-black dark:text-white">Share:</span></li>
                        <li>
                            <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                               href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                        </li>
                        <li>
                            <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                               href="#"><i class="unicon-link icon-1"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="post-author panel py-4 px-3 sm:p-3 xl:p-4 bg-gray-25 dark:bg-opacity-10 rounded lg:rounded-2">
                    <div class="row g-4 items-center">
                        <div class="col-12 sm:col-5 xl:col-3">
                            <figure class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                <img class="media-contain image uc-transition-scale-up uc-transition-opaque"
                                     src="{{asset('website/assets/images/latenews.png')}}"
                                     data-uc-img="loading: lazy">
                            </figure>
                        </div>
                        <div class="col">
                            <div class="panel vstack items-start gap-2 md:gap-3">
                                <h4 class="h5 lg:h4 m-0">{{$news->author->name}}</h4>
                                <p class="fs-6 lg:fs-5">Creative and experienced content writer with 6+ years of
                                    experience lazy to create unique content strategy for LateNews to turn website
                                    visitors into customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <x-related-news :news="$news"/>

            </div>
        </div>
    </article>

    <!-- Newsletter -->
</div>

<!-- Wrapper end -->