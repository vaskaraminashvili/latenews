<div class="post-related panel border-top pt-2 mt-8 xl:mt-9">
    <h4 class="h5 xl:h4 mb-5 xl:mb-6">Related to this topic:</h4>
    <div class="row child-cols-6 md:child-cols-3 gx-2 gy-4 sm:gx-3 sm:gy-6">
        @foreach($news as $item)
            <div>
                <article class="post type-post panel vstack gap-2">
                    <figure class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                             src="{{$item->img}}"
                             alt="{{$item->title}}"
                             data-uc-img="loading: lazy">
                        <a href="{{route('news.show' , $item->slug)}}" class="position-cover"
                           data-caption="{{$item->title}}"></a>
                    </figure>
                    <div class="post-header panel vstack gap-1">
                        <h5 class="h6 md:h5 m-0">
                            <a class="text-none" href="{{route('news.show' , $item->slug)}}">
                                {{$item->title}}
                            </a>
                        </h5>
                        <div class="post-date hstack gap-narrow fs-7 opacity-60">
                            <span>{{$item->publish_date}}</span>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</div>