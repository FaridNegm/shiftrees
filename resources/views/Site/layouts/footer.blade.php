<!-- Footer -->
<footer>
    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102 background-image-gemy hidden-xs" >
        <div class="col-md-6 col-xs-12 float-left">

        <div class="cleaner-h2"></div>

            <p class="ma-gemy">Interested To</p>
            <p class="ma-gemy-1">Get Our Featured Service</p>
        </div>
        <div class="col-md-6 col-xs-12 float-right" style="text-align: left;">
            <div class="cleaner-h2"></div>
            <button class="btn btn-gemy">Our Services</button>
        </div>
    </section>
    <div class="bg2 p-t-50 p-b-110">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <h3 class="p-b-2 txt-center footer_about_us">
                        ABOUT US
                    </h3>
                    <hr style="width: 30%; background-color: #efb532;height:1px;margin-top: 10px;">

                    <p class="about_us_p">
                        {!! str_limit( \App\About::where('status', 'active')->first()['description_en'] , 300) !!}
                    </p>
                </div>

                <div class="col-sm-6 col-lg-3 hidden-xs">
                    <h3 class="p-b-2 txt-center footer_links">
                        USEFULL LINKS
                    </h3>
                    <hr style="width: 30%; background-color: #efb532;height:1px;margin-top: 10px;">

                    <ul class="usefull_links">
                        <li>
                            <i class="fa fa-chevron-right"></i><a href="{{ url('/') }}">HOME</a>
                        </li>

                        <li>
                            <i class="fa fa-chevron-right"></i><a href="{{ url('services') }}">SERVICES</a>
                        </li>

                        <li>
                            <i class="fa fa-chevron-right"></i><a href="{{ url('portfolio') }}">PORTFOLIO</a>
                        </li>

                        <li>
                            <i class="fa fa-chevron-right"></i><a href="{{ url('blog') }}">BLOG</a>
                        </li>

                        <li>
                            <i class="fa fa-chevron-right"></i><a href="{{ url('/estimate') }}">CLIENT AREA</a>
                        </li>

                        <li>
                            <i class="fa fa-chevron-right"></i><a href="{{ url('/jobs') }}">JOBS</a>
                        </li>

                        <li>
                            <i class="fa fa-chevron-right"></i><a href="{{ url('/contact') }}">CONTACT</a>
                        </li>


                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 hidden-xs">
                    <h3 class="p-b-2 txt-center footer_get_in_touch">
                        GET IN TOUCH
                    </h3>
                    <hr style="width: 30%; background-color: #efb532;height:1px;margin-top: 10px;">

                    <ul class="get_in_touch_links">
                        <li class="s1-txt3 flex-w p-b-17">
                            <i class="fa fa-map-marker fs-20 wsize1"></i>
                            <span class="wsize2">
                                {!!  \App\Setting::first()['address'] !!}
                            </span>
                        </li>

                        <li class="s1-txt3 flex-w p-b-17">
                            <i class="fa fa-envelope-o fs-20 wsize1"></i>
                            <span class="wsize2">
                                {!!  \App\Setting::first()['address'] !!}
                            </span>
                        </li>

                        <li class="s1-txt3 flex-w p-b-17">
                            <i class="fa fa-phone fs-20 wsize1"></i>
                            <span class="wsize2">
                                {!!  \App\Setting::first()['phone'] !!}
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 hidden-xs">
                    <h3 class="p-b-2 txt-center footer_location">
                        OUR LOCATION
                    </h3>
                    <hr style="width: 30%; background-color: #efb532;height:1px;margin-top: 10px;">

                    <div>
                        {!!  \App\Setting::first()['location_map'] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright s1-txt7 txt-center p-l-15 p-r-15 p-t-28 p-b-28">
        Copyright © Developed by <span style="color: #efb532;font-weight:bold;">Fekra</span>. All rights reserved.
    </div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>
