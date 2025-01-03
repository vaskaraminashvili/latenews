<div class="navbar-container hstack border-bottom">
    <div class="uc-navbar-center gap-2 lg:gap-3 flex-1">
        <ul class="uc-navbar-nav gap-3  flex-1 fs-6 fw-bold"
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
                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                        @foreach($category->children as $child)
                                            <li>
                                                <a href="{{route('news.category', $child->slug)}}">{{$child->title}}</a>
                                            </li>
                                        @endforeach
                                     
                                    </ul>

                                </div>
                            </div>
                        </div>

                    @endif
                </li>
            @endforeach


        </ul>
    </div>
</div>