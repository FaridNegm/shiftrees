@extends('admin.layouts.app')

@section('title')
    {{ trans('app.home') }}
@endsection

@section('header')

@endsection

@section('content')

<!-- Quick stats boxes -->

    <div class="home" style="margin: 20px;">
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800">{{ $jobs }}</span>
                    </div>
    
                    <h3 class="no-margin"><a href="{{ url('admin/job') }}" style="color:#fff;">{{ trans('app.All Jobs') }}</a></h3>
                    
                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/job') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
        
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: royalblue;border: 1px solid royalblue;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800">{{ $Service }}</span>
                    </div>
    
                    <h3 class="no-margin"><a href="{{ url('admin/services') }}" style="color:#fff;">{{ trans('app.All Services') }}</a></h3>
                    
                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/services') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
   
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: #9a8160;border: 1px solid #9a8160;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800">{{ $Portfolio }}</span>
                    </div>
    
                    <h3 class="no-margin"><a href="{{ url('admin/portfolio') }}" style="color:#fff;">{{ trans('app.Portfolio') }}</a></h3>
                    
                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/portfolio') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
   
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: purple;border: 1px solid purple;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800">{{ $Blog }}</span>
                    </div>
    
                    <h3 class="no-margin"><a href="{{ url('admin/blog') }}" style="color:#fff;">{{ trans('app.Blog') }}</a></h3>
                    
                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/blog') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
   
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: yellowgreen;border: 1px solid yellowgreen;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800">{{ $contact_message }}</span>
                    </div>
    
                    <h3 class="no-margin"><a href="{{ url('admin/message') }}" style="color:#fff;">{{ trans('app.Contact Form Messages') }}</a></h3>
                    
                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/message') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
   
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: tomato;border: 1px solid tomato;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800">{{ $ApplyJob }}</span>
                    </div>
    
                    <h3 class="no-margin"><a href="{{ url('admin/apply_job') }}" style="color:#fff;">{{ trans('app.Apply Job Messages') }}</a></h3>
                    
                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/apply_job') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
   
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: orange;border: 1px solid orange;">
                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text badge bg-teal-800">{{ $Team }}</span>
                    </div>
    
                    <h3 class="no-margin"><a href="{{ url('admin/team') }}" style="color:#fff;">{{ trans('app.Team') }}</a></h3>
                    
                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ url('admin/team') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
   
    </div>

    <!-- /quick stats boxes -->

@endsection

@section('footer')

    @include('Admin/layouts/message')

    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
