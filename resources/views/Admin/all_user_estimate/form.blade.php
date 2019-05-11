@extends('admin.layouts.app')

@section('title')
    Fekra| {{ isset($find) ? trans('app.Edit') : trans('app.add') }}
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.Estimate') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('admin/dashboard/ar') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="">{{ trans('app.Estimate') }}</li>
                {{--  @if(isset($find))
                    <li class="active">{{ trans('app.Edit') }}: $find->name </li>
                @endif  --}}
            </ul>
        </div>
    </div>


    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{ isset($find) ? trans('app.Edit') : trans('app.add') }}</h5>
        </div>

        <br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{ isset($find) ? url('admin/edit_estimate/'.$find->id) : url('admin/add_estimate/ar') }}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:20px;">
                @csrf

                <div class="form-group">
                    <label class="control-label col-sm-3" for="name">{{ trans('app.Name') }}</label>
                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ isset($find->name) ? $find->name : ''}}" required placeholder="{{ trans('app.Name') }}">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="email">{{ trans('app.Email') }}</label>
                    <div class="col-md-9">
                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ isset($find->email) ? $find->email : ''}}" required placeholder="{{ trans('app.Email') }}">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="phone">{{ trans('app.Phone') }}</label>
                    <div class="col-md-9">
                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ isset($find->phone) ? $find->phone : ''}}" required placeholder="{{ trans('app.Phone') }}">

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="address">{{ trans('app.address') }}</label>
                    <div class="col-md-9">
                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ isset($find->address) ? $find->address : ''}}" required placeholder="{{ trans('app.address') }}">

                        @if ($errors->has('address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="message">{{ trans('app.Message') }}</label>
                    <div class="col-md-9">
                        <input id="message" type="text" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="{{ isset($find->message) ? $find->message : ''}}" required placeholder="{{ trans('app.Message') }}">

                        @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="on_hour_developer_cost">{{ trans('app.on_hour_developer_cost') }}</label>
                    <div class="col-md-9">
                        <input id="on_hour_developer_cost" type="text" class="form-control{{ $errors->has('on_hour_developer_cost') ? ' is-invalid' : '' }}" name="on_hour_developer_cost" value="{{ isset($find->on_hour_developer_cost) ? $find->on_hour_developer_cost : ''}}" required placeholder="{{ trans('app.on_hour_developer_cost') }}">

                        @if ($errors->has('on_hour_developer_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('on_hour_developer_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="on_hour_designer_cost">{{ trans('app.on_hour_designer_cost') }}</label>
                    <div class="col-md-9">
                        <input id="on_hour_designer_cost" type="text" class="form-control{{ $errors->has('on_hour_designer_cost') ? ' is-invalid' : '' }}" name="on_hour_designer_cost" value="{{ isset($find->on_hour_designer_cost) ? $find->on_hour_designer_cost : ''}}" required placeholder="{{ trans('app.on_hour_designer_cost') }}">

                        @if ($errors->has('on_hour_designer_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('on_hour_designer_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="question">{{ trans('app.Question') }}</label>
                    <div class="col-md-9">
                        <input id="question" type="text" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" value="{{ isset($find->question) ? $find->question : ''}}" required placeholder="{{ trans('app.Question') }}">

                        @if ($errors->has('question'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('question') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1">{{ trans('app.Answers') }}</label>
                    <div class="col-md-9">
                        <input id="answer1" type="text" class="form-control{{ $errors->has('answer1') ? ' is-invalid' : '' }}" name="answer1" value="{{ isset($find->answer1) ? $find->answer1 : ''}}" required placeholder="{{ trans('app.answer1') }}">

                        @if ($errors->has('answer1'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer1') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer2"></label>
                    <div class="col-md-9">
                        <input id="answer2" type="text" class="form-control{{ $errors->has('answer2') ? ' is-invalid' : '' }}" name="answer1" value="{{ isset($find->answer1) ? $find->answer2 : ''}}" required placeholder="{{ trans('app.answer2') }}">

                        @if ($errors->has('answer2'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer2') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="image">{{ trans('app.Image') }}</label>
                    <div class="col-md-9">
                        <input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default" value="{{ isset($find) ? $find->image : '' }}" name="image">


                        @if(isset($find))
                            <img src="{{ url('Admin/images/estimate/'.$find->image) }}" name="df_image" style="width:80px;height:80px;"/>
                            <input type="hidden" name="df_image" value="{{ $find->image }}" />
                        @endif

                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">{{ trans('app.Save') }} </button>
                </div>
            </form>

    </div>
    <!-- /horizontal form modal -->


@endsection

@section('footer')

    @include('Admin/layouts/message')

    <script src="{{ asset('') }}vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script>
        CKEDITOR.replace( 'article-ckeditor2' );
    </script>

    <script src="{{ url('Admin') }}/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ url('Admin') }}/js/demo_pages/datatables_advanced.js"></script>

    <!-- Theme JS files -->
	<script src="{{ url('Admin') }}/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="{{ url('Admin') }}/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
    <script src="{{ url('Admin') }}/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
