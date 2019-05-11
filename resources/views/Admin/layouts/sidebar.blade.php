<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{ url('Admin/') }}/images/demo/users/face11.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">
                            {{-- {{ Auth::user()->name }} --}}
                        </span>
                        <div class="text-size-mini text-muted">
                            {{-- {{ Auth::user()->email }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <br><br>
                <ul class="navigation navigation-main navigation-accordion">
                    <li>
                        <a href="#"><i class=" icon-users"></i> <span>@lang('app.Users')</span></a>
                        <ul>
                            <li><a href="{{ url('admin/user') }}">{{ trans('app.All Users') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-images3"></i> <span>{{ trans('app.Image Slider') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/slider') }}">{{ trans('app.Image Slider') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-info3"></i> <span>{{ trans('app.About Us') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/about_us') }}">{{ trans('app.About Us') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-grid2"></i> <span>{{ trans('app.Services') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/services') }}">{{ trans('app.All Services') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-blog"></i> <span>{{ trans('app.Blog') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/blog') }}">{{ trans('app.Blog') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-users4"></i> <span>{{ trans('app.Team') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/team') }}">{{ trans('app.Team') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-thumbs-up3"></i> <span>{{ trans('app.Partners') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/partner') }}">{{ trans('app.Partners') }}</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class=" icon-briefcase"></i> <span>{{ trans('app.Jobs') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/job') }}">{{ trans('app.Jobs') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-stars"></i> <span>{{ trans('app.Portfolio') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/portfolio') }}">{{ trans('app.All Portfolio') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-envelope"></i> <span>{{ trans('app.Contact Form Messages') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/message') }}">{{ trans('app.All Messages') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-envelope"></i> <span>{{ trans('app.Apply Job Messages') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/apply_job') }}">{{ trans('app.All Messages') }}</a></li>
                        </ul>
                    </li>

                    <li >
                        <a href="#" ><i class="icon-wrench"></i> <span>{{ trans('app.Estimate App') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/estimate') }}">{{ trans('app.Add Estimate App') }}</a></li>
                            <li><a href="{{ url('admin/all_user_estimate') }}">{{ trans('app.All User Estimate') }}</a></li>
                        </ul>
                    </li>
                    
                    <li >
                        <a href="#" ><i class="icon-wrench"></i> <span>{{ trans('app.Settings') }}</span></a>
                        <ul>
                            <li><a href="{{ url('admin/setting') }}">{{ trans('app.All Settings') }}</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
