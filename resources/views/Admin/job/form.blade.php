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
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.Jobs') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('admin/dashboard') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="">{{ trans('app.Jobs') }}</li>
                {{--  @if(isset($find))
                    <li class="active">{{ trans('app.Edit') }}: $find->title_ar </li>
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

            <form action="{{ isset($find) ? url('admin/edit_job/'.$find->id) : url('admin/add_job') }}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:20px;">
                @csrf

                <div class="form-group">
                    <label class="control-label col-sm-3" for="date">{{ trans('app.Date') }}</label>
                    <div class="col-md-9">
                        <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ isset($find->date) ? $find->date : ''}}"  placeholder="{{ trans('app.Date') }}" style="    text-align: right;">

                        @if ($errors->has('date'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="location">{{ trans('app.Location') }}</label>
                    <div class="col-md-9">
                        <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ isset($find->location) ? $find->location : ''}}"  placeholder="{{ trans('app.Location') }}">

                        @if ($errors->has('location'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="type">{{ trans('app.Type') }}</label>
                    <div class="col-md-9">
                        <input id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ isset($find->type) ? $find->type : ''}}"  placeholder="{{ trans('app.Type') }}">

                        @if ($errors->has('type'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="experience">{{ trans('app.Experience') }}</label>
                    <div class="col-md-9">
                        <input id="experience" type="text" class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}" name="experience" value="{{ isset($find->experience) ? $find->experience : ''}}"  placeholder="{{ trans('app.Experience') }}">

                        @if ($errors->has('experience'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('experience') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="job_title">{{ trans('app.Job Title') }}</label>
                    <div class="col-md-9">
                        <input id="job_title" type="text" class="form-control{{ $errors->has('job_title') ? ' is-invalid' : '' }}" name="job_title" value="{{ isset($find->job_title) ? $find->job_title : ''}}"  placeholder="{{ trans('app.Job Title') }}">

                        @if ($errors->has('job_title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('job_title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="gender_preference">{{ trans('app.Gender Preference') }}</label>
                    <div class="col-md-9">
                        <input id="gender_preference" type="text" class="form-control{{ $errors->has('gender_preference') ? ' is-invalid' : '' }}" name="gender_preference" value="{{ isset($find->gender_preference) ? $find->gender_preference : ''}}"  placeholder="{{ trans('app.Gender Preference') }}">

                        @if ($errors->has('gender_preference'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gender_preference') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="nationality">{{ trans('app.Nationality') }}</label>
                    <div class="col-md-9">
                        <input id="nationality" type="text" class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" value="{{ isset($find->nationality) ? $find->nationality : ''}}"  placeholder="{{ trans('app.Nationality') }}">

                        @if ($errors->has('nationality'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nationality') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="start_date">{{ trans('app.Start Date') }}</label>
                    <div class="col-md-9">
                        <input id="start_date" type="text" class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}" name="start_date" value="{{ isset($find->start_date) ? $find->start_date : ''}}"  placeholder="{{ trans('app.Start Date') }}">

                        @if ($errors->has('start_date'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('start_date') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="description_ar">{{ trans('app.description_ar') }}</label>
                    <div class="col-md-9">
                        <textarea id="article-ckeditor" class="form-control{{ $errors->has('description_ar') ? ' is-invalid' : '' }}" name="description_ar" rows="4" placeholder="{{ trans('app.description_ar') }}" >{{ isset($find->description_ar) ? $find->description_ar : ''}}</textarea>

                        @if ($errors->has('description_ar'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description_ar') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="description_en">{{ trans('app.description_en') }}</label>
                    <div class="col-md-9">
                        <textarea id="article-ckeditor2" class="form-control form-control{{ $errors->has('description_en') ? ' is-invalid' : '' }}" name="description_en" rows="4" placeholder="{{ trans('app.description_en') }}" >{{ isset($find->description_en) ? $find->description_en : ''}}</textarea>

                        @if ($errors->has('description_en'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description_en') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="required">{{ trans('app.Required') }}</label>
                    <div class="col-md-9">
                        <textarea id="article-ckeditor3" class="form-control form-control{{ $errors->has('required') ? ' is-invalid' : '' }}" name="required" rows="4" placeholder="{{ trans('app.Required') }}" >{{ isset($find->required) ? $find->required : ''}}</textarea>

                        @if ($errors->has('required'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('required') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="status">{{ trans('app.Status') }}</label>
                    <div class="col-md-9">

                        <select id="status" class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" >
                            <option selected value="active">{{trans('app.Active')}}</option>
                            <option value="not_active">{{trans('app.Not Active')}}</option>

                            @if(isset($find))
                                <option selected value="{{$find->status}}">{{ $find->status == 'active' ? trans('app.Active') : trans('app.Not Active') }}</option>
                            @endif

                        </select>

                        @if ($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
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
    <script>
        CKEDITOR.replace( 'article-ckeditor3' );
    </script>
    <script>
        CKEDITOR.replace( 'article-ckeditor4' );
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
