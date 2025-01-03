<div>


    <!-- Section start -->
    <div class="section panel overflow-hidden swiper-parent border-top">
        <div class="section-outer panel py-2 lg:py-4 dark:text-white">
            <div class="container max-w-xl">
                <div class="section-inner panel vstack gap-2">
                    <div class="block-layout carousel-layout vstack gap-2 lg:gap-3 panel">
                        <div class="block-content panel">
                            <div class="swiper"
                                 data-uc-swiper="items: 1; gap: 16; dots: .dot-nav; next: .nav-next; prev: .nav-prev; disable-class: d-none;"
                                 data-uc-swiper-s="items: 3; gap: 24;" data-uc-swiper-l="items: 4; gap: 24;">
                                <div class="swiper-wrapper">
                                    @foreach($latestNews as $item)
                                        <div class="swiper-slide">
                                            <div>
                                                <article class="post type-post panel uc-transition-toggle gap-2">
                                                    <div class="row child-cols g-2" data-uc-grid>
                                                        <div class="col-auto">
                                                            <div class="post-media panel overflow-hidden max-w-64px min-w-64px">
                                                                <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1">

                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                         src="{{$item->img}}"

                                                                         alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                                                         data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="post-header panel vstack justify-between gap-1">
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                       href="blog-details.html">
                                                                        {{$item->title}}
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-32px h-32px z-1">
                                <i class="icon-1 unicon-chevron-left"></i>
                            </div>
                            <div class="swiper-nav nav-next position-absolute top-50 start-100 translate-middle btn btn-alt-primary text-black rounded-circle p-0 border shadow-xs w-32px h-32px z-1">
                                <i class="icon-1 unicon-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section end -->

    <div class="section panel mb-4 lg:mb-6">
        <div class="section-outer panel">
            <div class="container max-w-xl">
                <div class="section-inner panel vstack gap-4">
                    <div class="section-content">
                        <div class="row child-col-12 lg:child-cols g-4 lg:g-6 col-match">
                            <div class="lg:col-9">
                                <div class="block-layout slider-layout swiper-parent uc-dark">
                                    <div class="block-content panel uc-visible-toggle">
                                        <div class="swiper"
                                             data-uc-swiper="items: 1; active: 1; gap: 4; prev: .nav-prev; next: .nav-next; autoplay: 6000; parallax: true; fade: true; effect: fade; disable-class: d-none;">
                                            <div class="swiper-wrapper">
                                                @foreach($slideNews as $item)
                                                    <div class="swiper-slide">
                                                        <article
                                                                class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 h-100 overflow-hidden uc-dark">
                                                            <div class="post-media panel overflow-hidden h-100">
                                                                <div class="featured-image bg-gray-25 dark:bg-gray-800 h-100 d-none md:d-block">
                                                                    <canvas class="h-100 w-100"></canvas>
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                         src="{{$item->img}}"
                                                                         alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                                                         data-uc-img="loading: lazy">
                                                                </div>
                                                                <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9 d-block md:d-none">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                         src="{{$item->img}}"
                                                                         alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                                                         data-uc-img="loading: lazy">
                                                                </div>
                                                            </div>
                                                            <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-90"></div>
                                                            <div class="post-header panel vstack justify-end items-start gap-1 p-2 sm:p-4 position-cover text-white"
                                                                 data-swiper-parallax-y="-24">
                                                                <div class="post-date hstack gap-narrow fs-7 text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                                    <span>{{ \Carbon\Carbon::parse($item->publish_date)->diffForHumans() }} </span>
                                                                </div>
                                                                <h3 class="post-title h5 lg:h4 xl:h3 m-0 max-w-600px text-white text-truncate-2">
                                                                    <a class="text-none text-white"
                                                                       href="blog-details.html">{{$item->title}}</a>
                                                                </h3>
                                                                <div>
                                                                    <div class="post-meta panel hstack justify-between fs-7 text-white text-opacity-60 mt-1">
                                                                        <div class="meta">
                                                                            <div class="hstack gap-2">
                                                                                <div>
                                                                                    <div class="post-author hstack gap-1">
                                                                                        <a href="page-author.html"
                                                                                           class="text-black dark:text-white text-none fw-bold">
                                                                                            {{$item->author->name}}
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <a href="#post_comment"
                                                                                       class="post-comments text-none hstack gap-narrow">
                                                                                        <i class="icon-narrow unicon-chat"></i>
                                                                                        <span>5</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="actions">
                                                                            <div class="hstack gap-1"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>

                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="swiper-nav nav-prev position-absolute top-50 start-0 translate-middle-y btn btn-alt-primary text-black rounded-circle p-0 mx-2 border-0 shadow-xs w-32px h-32px z-1 uc-hidden-hover">
                                            <i class="icon-1 unicon-chevron-left"></i>
                                        </div>
                                        <div class="swiper-nav nav-next position-absolute top-50 end-0 translate-middle-y btn btn-alt-primary text-black rounded-circle p-0 mx-2 border-0 shadow-xs w-32px h-32px z-1 uc-hidden-hover">
                                            <i class="icon-1 unicon-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-3">
                                <div class="panel cstack gap-2 h-100">
                                    <div>
                                        <div class="widget ad-widget vstack gap-2">
                                            <div class="widget-title text-center">
                                                <h5 class="fs-7 ft-tertiary text-uppercase m-0">Sponsore</h5>
                                            </div>
                                            <div class="widget-content">
                                                <a class="cstack max-w-300px mx-auto text-none"
                                                   href="https://themeforest.net/user/reacthemes/portfolio"
                                                   target="_blank" rel="nofollow">
                                                    <img class="d-none sm:d-block"
                                                         src="https://html.themewant.com/news5/assets/images/common/ad-desktop.jpg"
                                                         alt="Ad slot">
                                                    <img class="d-block sm:d-none"
                                                         src="https://html.themewant.com/news5/assets/images/common/ad-desktop.jpg"
                                                         alt="Ad slot">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>