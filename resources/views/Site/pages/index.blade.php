@extends('Site.layouts.app')

@section('title')
    SHIFTERS| {{ trans('app.home') }}
@endsection

@section('header')

@endsection

@section('content')

<!-- Section Home Page Slider -->
<section class="sec-slider1" style="overflow: hidden;">
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_slider_1" class="rev_slide fullwidthabanner" data-version="5.4.5" style="display: none;">
            <ul>
                @foreach($sliders as $slider)
                    <!-- Slide 1 -->
                    <li data-transition="fade">
                        <!--  -->
                        <img src="{{ url('Admin/images/slider/'.$slider->image) }}" alt="IMG-BG" class="rev-slidebg img-responsive">

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-c-m flex-w caption-1"
                        data-frames='[{"delay":2200,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.6;sY:0.6;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                        data-x="['center']"
                        data-y="['center']"
                        data-hoffset="['0', '0', '0', '0']"
                        data-voffset="['-100', '-100', '-130', '-150']"

                        data-width="['1200','992','768','576']"
                        data-height="['auto', 'auto', 'auto', 'auto']"

                        data-paddingtop="[0, 0, 0, 0]"
                        data-paddingright="[15, 15, 15, 15]"
                        data-paddingbottom="[0, 0, 0, 0]"
                        data-paddingleft="[15, 15, 15, 15]"

                        data-basealign="slide"
                        data-responsive_offset="off"
                        >

                        </div>

                        <!--  -->
                        <h4 class="tp-caption tp-resizeme caption-2"
                        data-frames='[{"delay":500,"split":"chars","splitdelay":0.05,"speed":1500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                        data-visibility="['on', 'on', 'on', 'on']"

                        data-fontsize="['20', 20', '20', '10']"
                        data-lineheight="['85', '85', '80', '65']"
                        data-color="['#FFF']"
                        data-textAlign="['center', 'center', 'center', 'center']"

                        data-x="['center']"
                        data-y="['center']"
                        data-hoffset="['0', '0', '0', '0']"
                        data-voffset="['0', '0', '0', '-80']"

                        data-width="['1200','992','768','576']"
                        data-height="['auto', 'auto', 'auto', 'auto']"
                        data-whitespace="['normal']"

                        data-paddingtop="[0, 0, 0, 0]"
                        data-paddingright="[15, 15, 15, 15]"
                        data-paddingbottom="[0, 0, 0, 0]"
                        data-paddingleft="[15, 15, 15, 15]"

                        data-basealign="slide"
                        data-responsive_offset="off"
                        >
                            {{--  @if(Config::get('app.locale') == 'en')
                                {!! $slider->title_en !!}
                            @else
                                {!! $slider->title_ar !!}
                            @endif  --}}

                            {!! $slider->title_en !!}
                        </h4>

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-c-m flex-w caption-3"
                        data-frames='[{"delay":3400,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                        data-x="['center']"
                        data-y="['center']"
                        data-hoffset="['0', '0', '0', '0']"
                        data-voffset="['110', '110', '130', '40']"

                        data-width="['1200','992','768','576']"
                        data-height="['auto']"

                        data-paddingtop="[0, 0, 0, 0]"
                        data-paddingright="[15, 15, 15, 15]"
                        data-paddingbottom="[0, 0, 0, 0]"
                        data-paddingleft="[15, 15, 15, 15]"

                        data-basealign="slide"
                        data-responsive_offset="off"
                        >
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<!-- Section About -->
<section class="sec-about bg4 p-t-80 p-b-90 about_us">
    <div class="container">
        <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                <span style="position:relative;top:-3px;">ــــــــ </span>  About Us  <span style="position:relative;top:-3px;">ــــــــ </span>
        </h3>

        <div class="cleaner-h3"></div>


        <div class="row">

            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-w" style="text-align:center">
                    <img src="{{url('Admin/images/about/'.$about['image'])}}" alt="IMG-ABOUT">
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="p-t-10">
                    <div class="p-b-29">
                        <h3 class="l2-txt2 p-b-2">
                            @if(Config::get('app.locale') == 'ar')
                                {!! $about['title_ar'] !!}
                            @else
                                {!!  $about['title_en'] !!}
                            @endif
                        </h3>
                    </div>
                    <p class="s1-txt8 p-b-25">
                        @if(Config::get('app.locale') == 'ar')
                            {!! str_limit($about['description_ar'] , 600) !!}
                        @else
                            {!! str_limit($about['description_en'] , 600) !!}
                        @endif
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section Services -->
<section class="sec-about bg4 p-t-80 p-b-90">
    <div class="container">
        <div class="row">

            <div class="col-md-6 p-b-30">
                <div class="col-sm-6 col-xs-12 pull-left service_div">
                    <div class="service_icon">
                        <img src="{{url('Admin//images/service/'.$services[0]['image'])}}" class="img-services"  style="width:60px;height:60px;border-radius:50%;"/>
                    </div>
                    <h3 class="service_h3">
                        @if(Config::get('app.locale') == 'ar')
                            {!! $services[0]['title_ar'] !!}
                        @else
                            {!!  $services[0]['title_en'] !!}
                        @endif
                    </h3>
                    <p class="service_p">
                        @if(Config::get('app.locale') == 'ar')
                            {!! str_limit($services[0]['description_ar'] , 150) !!}
                        @else
                            {!!  str_limit($services[0]['description_en'] ,150) !!}
                        @endif
                    </p>
                </div>
                <div class="col-sm-6 col-xs-12 pull-right service_div margin_top">
                    <div class="service_icon">
                        <img src="{{url('Admin//images/service/'.$services[1]['image'])}}" class="img-services"  style="width:60px;height:60px;border-radius:50%;"/>
                    </div>
                    <h3 class="service_h3">
                        @if(Config::get('app.locale') == 'ar')
                            {!! $services[1]['title_ar'] !!}
                        @else
                            {!!  $services[1]['title_en'] !!}
                        @endif
                    </h3>
                    <p class="service_p">
                        @if(Config::get('app.locale') == 'ar')
                            {!! str_limit($services[1]['description_ar'] , 150) !!}
                        @else
                            {!!  str_limit($services[1]['description_en'] ,150) !!}
                        @endif
                    </p>
                </div>
                <div class="col-sm-6 col-xs-12 pull-left service_div">
                    <div class="service_icon">
                        <img src="{{url('Admin//images/service/'.$services[2]['image'])}}" class="img-services"  style="width:60px;height:60px;border-radius:50%;"/>
                    </div>
                    <h3 class="service_h3">
                        @if(Config::get('app.locale') == 'ar')
                            {!! $services[2]['title_ar'] !!}
                        @else
                            {!!  $services[2]['title_en'] !!}
                        @endif
                    </h3>
                    <p class="service_p">
                        @if(Config::get('app.locale') == 'ar')
                            {!! str_limit($services[2]['description_ar'] , 150) !!}
                        @else
                            {!!  str_limit($services[2]['description_en'] ,150) !!}
                        @endif
                    </p>
                </div>
                <div class="col-sm-6 col-xs-12 pull-right service_div margin_top">
                    <div class="service_icon">
                        <img src="{{url('Admin//images/service/'.$services[3]['image'])}}" class="img-services"  style="width:60px;height:60px;border-radius:50%;"/>
                    </div>
                    <h3 class="service_h3">
                        @if(Config::get('app.locale') == 'ar')
                            {!! $services[3]['title_ar'] !!}
                        @else
                            {!!  $services[3]['title_en'] !!}
                        @endif
                    </h3>
                    <p class="service_p">
                        @if(Config::get('app.locale') == 'ar')
                            {!! str_limit($services[3]['description_ar'] , 150) !!}
                        @else
                            {!!  str_limit($services[3]['description_en'] ,150) !!}
                        @endif
                    </p>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="p-t-10">
                    <div class="p-b-29">
                        <h3 class="l2-txt2 p-b-2 our_services_h3">
                            <span style="position:relative;top:-3px;">ــــــــ </span>  Our Services
                        </h3>
                    </div>
                    <div class="p-b-29">
                        <h4 class="p-b-2 actually">
                            Actually.....
                        </h4>
                    </div>
                    <div class="p-b-29">
                        <h1 class=" p-b-2 what ">
                            What We Do?
                        </h1>
                    </div>
                    <h4 class=" p-b-25 our_service_h4">
                        Aenean volutpat, ligula congue luctus mollis, nibh mauris maximus orci, vitae vulputate metus nulla a nisl.
                    </h4>

                    <p class="s1-txt8 p-b-25">
                        Aenean volutpat, ligula congue luctus mollis, nibh mauris maximus orci, vitae vulputate metus nulla a nisl. Etiam blandit vehicula sapien at mattis. Aliquam molestie facilisis dignissim. Praesent eleifend arcu quis eros sagittis, id aliquam nisi cursus. Phasellus pulvinar neque vitae turpis vehicula facilisisAenean volutpat, ligula congue luctus mollis, nibh mauris maximus orci, vitae vulputate metus nulla a nisl. Etiam blandit vehicula sapien at mattis. Aliquam molestie facilisis dignissim. Praesent eleifend arcu quis eros sagittis, id aliquam nisi cursus. Phasellus pulvinar neque vitae turpis vehicula facilisis.
                    </p>
                    <div class="our_service_button">
                        <button class="btn" style="background-color: #e68080;border:0px;color:#fff;padding:13px 17px;border-radius:50px;font-size: 13px;">GET A QUOTE</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Work flow -->
<section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102 gemy hidden-xs" style="overflow: hidden;">
    <div class="container">
            <h3 class="p-b-2 txt-center work_flow">
                WORK FLOW
            </h3>

            <div class="cleaner-h1"></div>

            <h3 class="p-b-2 txt-center work_process">
                Our Working Process
            </h3>

            <div class="cleaner-h3"></div>

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 work_flow_div">
                <i class="fa fa-home"></i>
                <p>PLANNING</p>
                <p class="line-gemy" class="line">___________________</p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6  work_flow_div">
                <i class="fa fa-anchor"></i>
                <p>RESEARCH</p>
                <p class="line-gemy" class="line">___________________</p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6  work_flow_div">
                <i class="fa fa-archive"></i>
                <p>OPTIMZING</p>
                <p class="line-gemy" class="line">___________________</p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-6  work_flow_div">
                <i class="fa fa-briefcase"></i>
                <p>RESULTS</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured properties start -->
<div class="featured-properties content-area-2" >
    <div class="container">
    <div class="row">

    <div class="col-md-6">
        <div>

        <div class="p-b-18">
        <h4 class="p-b-2 actually-font"> Here Is Our Some </h4>
        </div>

            <h1 class="p-b-2 what">
                 Awsome Works
            </h1>
        </div>

        </div><!--end col-6-->


        <div class="col-md-6">

        <div class="cleaner-h3"></div>
            <ul class="list-inline-listing filters filteriz-navigation">
                <li class="active btn filtr-button filtr" data-filter="all">All</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr">UI/UX</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr">WEB DESIGNER</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr">MOBILE APP</li>
                <li data-filter="4" class="btn btn-inline filtr-button filtr">CORBIT ID</li>
            </ul>
        </div>



        </div><!--end row-->


        <div class="cleaner-h3"></div>
        <div class="cleaner-h3"></div>

        <div class="row filter-portfolio">
            <div class="cars">
                @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="{{ $portfolio->type }}">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{  url('Admin/images/portfolio/'.$portfolio->image) }}" alt="property-7" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="{{ $portfolio->url }}" target="_blank" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Blog -->
<section class="sec-blog bg0 p-t-50 p-b-30">
    <div class="container">
        <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
            <span style="position:relative;top:-3px;">ــــــــ </span>  Blog  <span style="position:relative;top:-3px;">ــــــــ </span>
        </h3>
        <h2 class="l2-txt2 p-b-2 txt-center about_us_h3">
            News Feeds
        </h2>
        <p class="l2-txt2 p-b-2 txt-center about_us_h3 blog_p">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione consectetur
        </p>

        <div class="cleaner-h3"></div>

        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-md-4  col-xs-12 ">
                    <!-- item event -->
                    <div class="item-event">
                        <a href="{{ url('blog/'.$blog->id) }}" class="wrap-pic-w how-overlay2">
                            <img src="{{url('Admin/images/blog/'.$blog->image)}}" alt="IMG-BLOG" class="img-responsive">
                        </a>

                        <div class="p-t-10">
                            <h4 class="p-b-13">
                                <a href="{{ url('blog/'.$blog->id) }}" class="m2-txt1 hov-cl1 trans-04">
                                    @if(Config::get('app.locale') == 'ar')
                                        {!! str_limit($blog->title_ar , 70) !!}
                                    @else
                                        {!! str_limit($blog->title_en , 70) !!}
                                    @endif
                                </a>
                            </h4>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

@section('footer')

@endsection
