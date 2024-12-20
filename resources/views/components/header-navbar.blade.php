<div class="navbar-container hstack border-bottom">
    <div class="uc-navbar-center gap-2 lg:gap-3 flex-1">
        <ul class="uc-navbar-nav gap-3 justify-between flex-1 fs-6 fw-bold"
            style="--uc-nav-height: 48px">
            @foreach($categories as $category)
                <li>
                    <a href="#">{{$category->title}}
                        @if(count($category->children))
                            <span data-uc-navbar-parent-icon></span>
                        @endif
                    </a>
                    @if(count($category->children))
                        <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-0 hide-scrollbar"
                             data-uc-drop=" offset: 0; boundary: !.navbar-container; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                            <div class="row col-match g-2">
                                <div class="uc-navbar-switcher-nav border-end">
                                    <ul class="uc-tab-left fs-6 text-end "
                                        data-uc-tab="connect: #uc-navbar-switcher-tending; animation: uc-animation-slide-right-small, uc-animation-slide-left-small">
                                        @foreach($category->children as $child)
                                            <li><a href="#">{{$child->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    @endif
                </li>
            @endforeach
            <li>
                <a href="#">Politics <span data-uc-navbar-parent-icon></span></a>
                <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-0 hide-scrollbar"
                     data-uc-drop=" offset: 0; boundary: !.navbar-container; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="row child-cols col-match g-2">
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-04.jpg"
                                             alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">The Importance of Sleep: Tips for
                                            Better Rest and Recovery</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>2h</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-05.jpg"
                                             alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">The Future of Sustainable Living:
                                            Driving Eco-Friendly Lifestyles</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>12h</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>1</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-10.jpg"
                                             alt="Eco-Tourism: Traveling Responsibly and Sustainably"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Eco-Tourism: Traveling Responsibly
                                            and Sustainably</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>29d</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>20</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-13.jpg"
                                             alt="Tech Tools for your Time Management: Enhancing Productivity"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Tech Tools for your Time Management:
                                            Enhancing Productivity</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>3mo</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>19</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-17.jpg"
                                             alt="Potential of Immersive Technologies help your Business Grow"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Potential of Immersive Technologies
                                            help your Business Grow</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>1yr</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>45</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#">Opinions <span data-uc-navbar-parent-icon></span></a>
                <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-0 hide-scrollbar"
                     data-uc-drop=" offset: 0; boundary: !.navbar-container; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="row child-cols col-match g-2">
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-03.jpg"
                                             alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Balancing Work and Wellness: Tech
                                            Solutions for Healthy</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>1h</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>0</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-06.jpg"
                                             alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Business Agility the Digital Age:
                                            Leveraging AI and Automation</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>7d</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>23</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-14.jpg"
                                             alt="A Guide to The Rise of Gourmet Street Food: Trends and Top Picks"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">A Guide to The Rise of Gourmet
                                            Street Food: Trends and Top Picks</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>6mo</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>2</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-16.jpg"
                                             alt="Top Independent Contractors to Invest in Best of Startups"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Top Independent Contractors to
                                            Invest in Best of Startups</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>1yr</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>12</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-19.jpg"
                                             alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">The Future of Sustainable Living:
                                            Driving Eco-Friendly Lifestyles</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>2mo</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>1</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#">World <span data-uc-navbar-parent-icon></span></a>
                <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-0 hide-scrollbar"
                     data-uc-drop=" offset: 0; boundary: !.navbar-container; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="row child-cols col-match g-2">
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-01.jpg"
                                             alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">The Rise of AI-Powered Personal
                                            Assistants: How They Manage</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>1min</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>2</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-02.jpg"
                                             alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Tech Innovations Reshaping the
                                            Retail Landscape: AI Payments</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>55min</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>100</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-07.jpg"
                                             alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">The Art of Baking: From Classic
                                            Bread to Artisan Pastries</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>9d</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>112</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-09.jpg"
                                             alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Hidden Gems: Underrated Travel
                                            Destinations Around the World</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>23d</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>15</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-12.jpg"
                                             alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">AI-Powered Financial Planning: How
                                            Algorithms Revolutionizing</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>2mo</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>2</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#">Media <span data-uc-navbar-parent-icon></span></a>
                <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-0 hide-scrollbar"
                     data-uc-drop=" offset: 0; boundary: !.navbar-container; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="row child-cols col-match g-2">
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-08.jpg"
                                             alt="AI and Marketing: Unlocking Customer Insights"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">AI and Marketing: Unlocking Customer
                                            Insights</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>15d</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>2</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-11.jpg"
                                             alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Solo Travel: Some Tips and
                                            Destinations for the Adventurous Explorer</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>2mo</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>5</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-15.jpg"
                                             alt="Gaming in the Age of AI: Strategies for Startups"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Gaming in the Age of AI: Strategies
                                            for Startups</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>9mo</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>19</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-18.jpg"
                                             alt="Virtual Reality and Mental Health: Exploring the Therapeutic"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Virtual Reality and Mental Health:
                                            Exploring the Therapeutic</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>2mo</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>290</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                <div class="post-media panel overflow-hidden">
                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                             src="../website/assets/images/common/img-fallback.png"
                                             data-src="../website/assets/images/demo-seven/posts/img-20.jpg"
                                             alt="Smart Homes, Smarter Living: Exploring IoT and AI"
                                             data-uc-img="loading: lazy">
                                    </div>
                                    <a href="blog-details.html" class="position-cover"></a>
                                </div>
                                <div class="post-header panel vstack gap-narrow">
                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                        <a class="text-none hover:text-primary duration-150"
                                           href="blog-details.html">Smart Homes, Smarter Living:
                                            Exploring IoT and AI</a>
                                    </h3>
                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                        <div>
                                            <div class="post-date hstack gap-narrow">
                                                <span>23d</span>
                                            </div>
                                        </div>
                                        <div>·</div>
                                        <div>
                                            <a href="#post_comment"
                                               class="post-comments text-none hstack gap-narrow">
                                                <i class="icon-narrow unicon-chat"></i>
                                                <span>15</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="blog-category.html">Tech</a>
            </li>
            <li>
                <a href="blog-category.html">Business</a>
            </li>
            <li>
                <a href="blog-category.html">Fashion</a>
            </li>
            <li>
                <a href="blog-category.html">Arts & Entertainments</a>
            </li>
            <li>
                <a href="blog-category.html">Food</a>
            </li>
            <li>
                <a href="blog-category.html">E-Books</a>
            </li>

        </ul>
    </div>
</div>