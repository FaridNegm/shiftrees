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

            <form action="{{ isset($find) ? url('admin/edit_estimate/'.$find->id) : url('admin/add_estimate') }}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:20px;">
                @csrf

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
                    <label class="control-label col-sm-3" for="type">{{ trans('app.Type') }}</label>
                    <div class="col-md-9">

                        <select id="type" class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" >
                            <option value="Web">Web</option>
                            <option value="Andriod">Andriod</option>
                            <option value="Ios">Ios</option>

                            @if(isset($find))
                                <option selected value="{{$find->type}}">{{ $find->type }}</option>
                            @endif

                        </select>

                        @if ($errors->has('type'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1">{{ trans('app.Answers') }}</label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer1" type="text" class="form-control{{ $errors->has('answer1') ? ' is-invalid' : '' }}" name="answer1" value="{{ isset($find) ? $find->answer1 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer1_dev_cost" type="text" class="form-control{{ $errors->has('answer1_dev_cost') ? ' is-invalid' : '' }}" name="answer1_dev_cost" value="{{ isset($find) ? $find->answer1_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer1_des_cost" type="text" class="form-control{{ $errors->has('answer1_des_cost') ? ' is-invalid' : '' }}" name="answer1_des_cost" value="{{ isset($find) ? $find->answer1_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer1'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer1') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer1_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer1_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer1_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer1_des_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1"></label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer2" type="text" class="form-control{{ $errors->has('answer2') ? ' is-invalid' : '' }}" name="answer2" value="{{ isset($find) ? $find->answer2 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer2_dev_cost" type="text" class="form-control{{ $errors->has('answer2_dev_cost') ? ' is-invalid' : '' }}" name="answer2_dev_cost" value="{{ isset($find) ? $find->answer2_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer2_des_cost" type="text" class="form-control{{ $errors->has('answer2_des_cost') ? ' is-invalid' : '' }}" name="answer2_des_cost" value="{{ isset($find) ? $find->answer2_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer2'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer2') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer2_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer2_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer2_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer2_des_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1"></label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer3" type="text" class="form-control{{ $errors->has('answer3') ? ' is-invalid' : '' }}" name="answer3" value="{{ isset($find) ? $find->answer3 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer3_dev_cost" type="text" class="form-control{{ $errors->has('answer3_dev_cost') ? ' is-invalid' : '' }}" name="answer3_dev_cost" value="{{ isset($find) ? $find->answer3_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer3_des_cost" type="text" class="form-control{{ $errors->has('answer3_des_cost') ? ' is-invalid' : '' }}" name="answer3_des_cost" value="{{ isset($find) ? $find->answer3_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer3'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer3') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer3_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer3_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer3_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer3_des_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1"></label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer4" type="text" class="form-control{{ $errors->has('answer4') ? ' is-invalid' : '' }}" name="answer4" value="{{ isset($find) ? $find->answer4 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer4_dev_cost" type="text" class="form-control{{ $errors->has('answer4_dev_cost') ? ' is-invalid' : '' }}" name="answer4_dev_cost" value="{{ isset($find) ? $find->answer4_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer4_des_cost" type="text" class="form-control{{ $errors->has('answer4_des_cost') ? ' is-invalid' : '' }}" name="answer4_des_cost" value="{{ isset($find) ? $find->answer4_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer4'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer4') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer4_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer4_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer4_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer4_des_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1"></label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer5" type="text" class="form-control{{ $errors->has('answer5') ? ' is-invalid' : '' }}" name="answer5" value="{{ isset($find) ? $find->answer5 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer5_dev_cost" type="text" class="form-control{{ $errors->has('answer5_dev_cost') ? ' is-invalid' : '' }}" name="answer5_dev_cost" value="{{ isset($find) ? $find->answer5_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer5_des_cost" type="text" class="form-control{{ $errors->has('answer5_des_cost') ? ' is-invalid' : '' }}" name="answer5_des_cost" value="{{ isset($find) ? $find->answer5_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer5'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer5') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer5_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer5_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer5_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer5_des_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1"></label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer6" type="text" class="form-control{{ $errors->has('answer6') ? ' is-invalid' : '' }}" name="answer6" value="{{ isset($find) ? $find->answer6 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer6_dev_cost" type="text" class="form-control{{ $errors->has('answer6_dev_cost') ? ' is-invalid' : '' }}" name="answer6_dev_cost" value="{{ isset($find) ? $find->answer6_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer6_des_cost" type="text" class="form-control{{ $errors->has('answer6_des_cost') ? ' is-invalid' : '' }}" name="answer6_des_cost" value="{{ isset($find) ? $find->answer6_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer6'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer6') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer6_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer6_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer6_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer6_des_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1"></label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer7" type="text" class="form-control{{ $errors->has('answer7') ? ' is-invalid' : '' }}" name="answer7" value="{{ isset($find) ? $find->answer7 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer7_dev_cost" type="text" class="form-control{{ $errors->has('answer7_dev_cost') ? ' is-invalid' : '' }}" name="answer7_dev_cost" value="{{ isset($find) ? $find->answer7_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer7_des_cost" type="text" class="form-control{{ $errors->has('answer7_des_cost') ? ' is-invalid' : '' }}" name="answer7_des_cost" value="{{ isset($find) ? $find->answer7_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer7'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer7') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer7_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer7_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer7_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer7_des_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1"></label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer8" type="text" class="form-control{{ $errors->has('answer8') ? ' is-invalid' : '' }}" name="answer8" value="{{ isset($find) ? $find->answer8 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer8_dev_cost" type="text" class="form-control{{ $errors->has('answer8_dev_cost') ? ' is-invalid' : '' }}" name="answer8_dev_cost" value="{{ isset($find) ? $find->answer8_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer8_des_cost" type="text" class="form-control{{ $errors->has('answer8_des_cost') ? ' is-invalid' : '' }}" name="answer8_des_cost" value="{{ isset($find) ? $find->answer8_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer8'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer8') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer8_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer8_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer8_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer8_des_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1"></label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer9" type="text" class="form-control{{ $errors->has('answer9') ? ' is-invalid' : '' }}" name="answer9" value="{{ isset($find) ? $find->answer9 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer9_dev_cost" type="text" class="form-control{{ $errors->has('answer9_dev_cost') ? ' is-invalid' : '' }}" name="answer9_dev_cost" value="{{ isset($find) ? $find->answer9_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer9_des_cost" type="text" class="form-control{{ $errors->has('answer9_des_cost') ? ' is-invalid' : '' }}" name="answer9_des_cost" value="{{ isset($find) ? $find->answer9_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer9'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer9') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer9_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer9_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer9_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer9_des_cost') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="answer1"></label>
                    <div class="col-md-9">
                        <span class="col-md-4">
                            <input id="answer10" type="text" class="form-control{{ $errors->has('answer10') ? ' is-invalid' : '' }}" name="answer10" value="{{ isset($find) ? $find->answer10 : ''}}"  placeholder="{{ trans('app.Answer') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer10_dev_cost" type="text" class="form-control{{ $errors->has('answer10_dev_cost') ? ' is-invalid' : '' }}" name="answer10_dev_cost" value="{{ isset($find) ? $find->answer10_dev_cost : ''}}"  placeholder="{{ trans('app.Developer_cost') }}">
                        </span>

                        <span class="col-md-4">
                            <input id="answer10_des_cost" type="text" class="form-control{{ $errors->has('answer10_des_cost') ? ' is-invalid' : '' }}" name="answer10_des_cost" value="{{ isset($find) ? $find->answer10_des_cost : ''}}"  placeholder="{{ trans('app.Designer_cost') }}">
                        </span>


                        @if ($errors->has('answer10'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer10') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer10_dev_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer10_dev_cost') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('answer10_des_cost'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('answer10_des_cost') }}</strong>
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
