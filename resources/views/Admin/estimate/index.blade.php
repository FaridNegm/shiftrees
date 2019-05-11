@extends('admin.layouts.app')

@section('title')
    Fekra| {{ trans('app.Estimate') }}
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
                <li><a href="{{ url('/work') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="active">{{ trans('app.Estimate') }}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{ trans('app.Estimate') }}</h5>
            <a href="{{ url('admin/add_estimate') }}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>{{ trans('app.New') }}</a>
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

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>{{ trans('app.Id') }}</th>
                    <th>{{ trans('app.Question') }}</th>
                    <th>{{ trans('app.Type') }}</th>
                    <th>{{ trans('app.Image') }}</th>
                    <th>{{ trans('app.Answers') }}</th>
                    <th>{{ trans('app.Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $estimate)
                    <tr>
                        <td>{{ $estimate->id}}</td>
                        <td>{{ $estimate->question}}</td>
                        <td>{{ $estimate->type}}</td>
                        <td>
                            <img src="{{ url('Admin/images/estimate/'.$estimate->image) }}" style="width:50px;height:50px;border-radius:50%;"/>
                        </td>
                        <td>
                            @if(isset($estimate->answer1))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer1 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer1_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer1_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                            @if(isset($estimate->answer2))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer2 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer2_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer2_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                            @if(isset($estimate->answer3))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer3 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer3_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer3_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                            @if(isset($estimate->answer4))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer4 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer4_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer4_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                            @if(isset($estimate->answer5))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer5 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer5_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer5_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                            @if(isset($estimate->answer6))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer6 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer6_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer6_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                            @if(isset($estimate->answer7))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer7 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer7_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer7_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                            @if(isset($estimate->answer8))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer8 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer8_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer8_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                            @if(isset($estimate->answer9))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer9 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer9_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer9_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                            @if(isset($estimate->answer10))
                                <div class-"answers">
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer10 }}</p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            Developer: {{ $estimate->answer10_dev_cost }}
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            Designer: {{ $estimate->answer10_des_cost }}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/'.$estimate->id.'/edit_estimate') }}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                            <a href="{{ url('admin/'.$estimate->id.'/delete_estimate') }}"  id="delete">
                                <span class="label label-danger label-rounded label-icon"><i class="icon-trash"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('footer')

    @include('Admin/layouts/message')

    <script src="{{ url('Admin') }}/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ url('Admin') }}/js/demo_pages/datatables_advanced.js"></script>

    <!-- Theme JS files -->
	<script src="{{ url('Admin') }}/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="{{ url('Admin') }}/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
    <script src="{{ url('Admin') }}/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#delete").click(function(){
                {{--  if( !confirm('Are you sure you want to continue?')) {
                    return false;
                }  --}}
            });
        });
    </script>
@endsection
