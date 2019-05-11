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
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.Settings') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('admin/dashboard') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="">{{ trans('app.Settings') }}</li>
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

            <form action="{{ isset($find) ? url('admin/edit_setting/'.$find->id) : url('admin/add_setting') }}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:20px;">
                @csrf

                <div class="form-group">
                    <label class="control-label col-sm-3" for="address">{{ trans('app.address') }}</label>
                    <div class="col-md-9">
                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ isset($find->address) ? $find->address : ''}}"  placeholder="{{ trans('app.address') }}">

                        @if ($errors->has('address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="address2">{{ trans('app.address2') }}</label>
                    <div class="col-md-9">
                        <input id="address2" type="text" class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" name="address2" value="{{ isset($find->address2) ? $find->address2 : ''}}"  placeholder="{{ trans('app.address2') }}">

                        @if ($errors->has('address2'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address2') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="phone">{{ trans('app.phone') }}</label>
                    <div class="col-md-9">
                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ isset($find->phone) ? $find->phone : ''}}"  placeholder="{{ trans('app.phone') }}">

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="location_map">{{ trans('app.location_map') }}</label>
                    <div class="col-md-9">
                        <textarea id="location_map" class="form-control{{ $errors->has('location_map') ? ' is-invalid' : '' }}" name="location_map" rows="5" placeholder="{{ trans('app.location_map') }}" >{{ isset($find->location_map) ? $find->location_map : ''}}</textarea>

                        @if ($errors->has('location_map'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('location_map') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="location_map2">{{ trans('app.location_map2') }}</label>
                    <div class="col-md-9">
                        <textarea id="location_map2" class="form-control{{ $errors->has('location_map2') ? ' is-invalid' : '' }}" name="location_map2" rows="5" placeholder="{{ trans('app.location_map2') }}" >{{ isset($find->location_map2) ? $find->location_map2 : ''}}</textarea>

                        @if ($errors->has('location_map2'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('location_map2') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="gmail">{{ trans('app.gmail') }}</label>
                    <div class="col-md-9">
                        <input id="gmail" type="text" class="form-control{{ $errors->has('gmail') ? ' is-invalid' : '' }}" name="gmail" value="{{ isset($find->gmail) ? $find->gmail : ''}}"  placeholder="{{ trans('app.gmail') }}">

                        @if ($errors->has('gmail'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('gmail') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="email">{{ trans('app.email') }}</label>
                    <div class="col-md-9">
                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ isset($find->email) ? $find->email : ''}}"  placeholder="{{ trans('app.email') }}">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="facebook">{{ trans('app.facebook') }}</label>
                    <div class="col-md-9">
                        <input id="facebook" type="text" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" value="{{ isset($find->facebook) ? $find->facebook : ''}}"  placeholder="{{ trans('app.facebook') }}">

                        @if ($errors->has('facebook'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('facebook') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="whatsapp">{{ trans('app.whatsapp') }}</label>
                    <div class="col-md-9">
                        <input id="whatsapp" type="text" class="form-control{{ $errors->has('whatsapp') ? ' is-invalid' : '' }}" name="whatsapp" value="{{ isset($find->whatsapp) ? $find->whatsapp : ''}}"  placeholder="{{ trans('app.whatsapp') }}">

                        @if ($errors->has('whatsapp'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('whatsapp') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="twitter">{{ trans('app.twitter') }}</label>
                    <div class="col-md-9">
                        <input id="twitter" type="text" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" value="{{ isset($find->twitter) ? $find->twitter : ''}}"  placeholder="{{ trans('app.twitter') }}">

                        @if ($errors->has('twitter'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('twitter') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="linkedin">{{ trans('app.linkedin') }}</label>
                    <div class="col-md-9">
                        <input id="linkedin" type="text" class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" name="linkedin" value="{{ isset($find->linkedin) ? $find->linkedin : ''}}"  placeholder="{{ trans('app.linkedin') }}">

                        @if ($errors->has('linkedin'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('linkedin') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="title_ar">{{ trans('app.title_ar') }}</label>
                    <div class="col-md-9">
                        <input id="title_ar" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title_ar" value="{{ isset($find->title_ar) ? $find->title_ar : ''}}"  placeholder="{{ trans('app.title_ar') }}">

                        @if ($errors->has('title_ar'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title_ar') }}</strong>
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
                    <label class="control-label col-sm-3" for="title_en">{{ trans('app.title_en') }}</label>
                    <div class="col-md-9">
                        <input id="title_en" type="text" class="form-control{{ $errors->has('title_en') ? ' is-invalid' : '' }}" name="title_en" value="{{ isset($find->title_en) ? $find->title_en : ''}}" placeholder="{{ trans('app.title_en') }}">

                        @if ($errors->has('title_en'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title_en') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

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
                    <label class="control-label col-sm-3" for="contact_description_ar">{{ trans('app.contact_description_ar') }}</label>
                    <div class="col-md-9">
                        <textarea id="article-ckeditor3" class="form-control form-control{{ $errors->has('contact_description_ar') ? ' is-invalid' : '' }}" name="contact_description_ar" rows="4" placeholder="{{ trans('app.contact_description_ar') }}" >{{ isset($find->contact_description_ar) ? $find->contact_description_ar : ''}}</textarea>

                        @if ($errors->has('contact_description_ar'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('contact_description_ar') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <br><br>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="contact_description_en">{{ trans('app.contact_description_en') }}</label>
                    <div class="col-md-9">
                        <textarea id="article-ckeditor4" class="form-control form-control{{ $errors->has('contact_description_en') ? ' is-invalid' : '' }}" name="contact_description_en" rows="4" placeholder="{{ trans('app.contact_description_en') }}" >{{ isset($find->contact_description_en) ? $find->contact_description_en : ''}}</textarea>

                        @if ($errors->has('contact_description_en'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('contact_description_en') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="image">{{ trans('app.contact_image') }}</label>
                    <div class="col-md-9">
                        <input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default" value="{{ isset($find) ? $find->contact_image : '' }}" name="image">


                        @if(isset($find))
                            <img src="{{ url('Admin/images/setting/'.$find->contact_image) }}" name="df_image" style="width:80px;height:80px;"/>
                            <input type="hidden" name="df_image" value="{{ $find->contact_image }}" />
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
