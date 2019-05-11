<!-- Header -->
<header class="header-v1">
    <!-- Header desktop -->
    <div class="container-menu-desktop">

        <div class="wrap-menu-desktop">
            <div class="limiter-menu-desktop">

                <!-- Logo desktop -->
                <div class="home_logo">
                    <a href="{{ url('/') }}"><img src="{{url('Site')}}/images/logo.png" alt="IMG-LOGO"></a>
                </div>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a href="{{ url('/') }}">{{ trans('app.HOME') }}</a>
                        </li>

                        <li>
                            <a href="{{ url('services') }}">{{ trans('app.SERVICES') }}</a>
                        </li>

                        <li>
                            <a href="{{ url('portfolio') }}">{{ trans('app.PORTFOLIO') }}</a>
                        </li>

                        <li>
                            <a href="{{ url('about') }}">{{ trans('app.ABOUT') }}</a>
                        </li>

                        <li>
                            <a href="{{ url('blog') }}">{{ trans('app.BLOG') }}</a>
                        </li>

                        <li>
                            <a href="{{ url('/estimate') }}">{{ trans('app.CLIENT AREA') }}</a>
                        </li>

                        <li>
                            <a href="{{ url('/jobs') }}">{{ trans('app.JOBS') }}</a>
                        </li>

                        <li>
                            <a href="{{ url('/contact') }}">{{ trans('app.CONTACT') }}</a>
                        </li>

                        @if(Config::get('app.locale') == 'ar' )
                            <li style="border-bottom: 2px solid #efb532;padding: 0px;" >
                                <a href="{{ url('locale/en') }}">EN</a>
                            </li>
                        @else
                            <li style="border-bottom: 2px solid #efb532;padding: 0px;">
                                <a href="{{ url('locale/ar') }}">AR</a>
                            </li>
                        @endif
                    </ul>
                </div>

                {{-- <!-- Search desktop -->
                <div class="search-desktop">
                    <button class="btn-show-modal-search js-show-modal-search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div> --}}

            </div>
        </div>
    </div>


    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="home.html"><img src="{{url('Site')}}/images/logo-mob.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Search desktop -->
        <div class="search-desktop">
            <button class="btn-show-modal-search js-show-modal-search">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>

    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                    <a href="{{ url('/') }}">{{ trans('app.HOME') }}</a>
                </li>

                <li>
                    <a href="{{ url('services') }}">{{ trans('app.SERVICES') }}</a>
                </li>

                <li>
                    <a href="{{ url('portfolio') }}">{{ trans('app.PORTFOLIO') }}</a>
                </li>

                <li>
                    <a href="{{ url('about') }}">{{ trans('app.ABOUT') }}</a>
                </li>

                <li>
                    <a href="{{ url('blog') }}">{{ trans('app.BLOG') }}</a>
                </li>

                <li>
                    <a href="{{ url('/estimate') }}">{{ trans('app.CLIENT AREA') }}</a>
                </li>

                <li>
                    <a href="{{ url('/jobs') }}">{{ trans('app.JOBS') }}</a>
                </li>

                <li>
                    <a href="{{ url('/contact') }}">{{ trans('app.CONTACT') }}</a>
                </li>

                @if(Config::get('app.locale') == 'ar' )
                    <li>
                        <a href="{{ url('locale/en') }}">EN</a>
                    </li>
                @else
                    <li>
                        <a href="{{ url('locale/ar') }}">AR</a>
                    </li>
                @endif
            </ul>
    </div>

    {{--  <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <button class="flex-c-m btn-hide-modal-search trans-04">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>

        <form class="container-search-header">
            <div class="wrap-search-header">
                <input class="placeholder0" type="text" name="search" placeholder="Search...">

                <button class="flex-c-m trans-04">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </form>
    </div>  --}}
</header>
