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
                    <th>{{ trans('app.Name') }}</th>
                    <th>{{ trans('app.Email') }}</th>
                    <th>{{ trans('app.Phone') }}</th>
                    <th>{{ trans('app.Questions And Answers') }}</th>
                    <th>{{ trans('app.Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $estimate)
                    <tr>
                        <td>{{ $estimate->id}}</td>
                        <td>{{ $estimate->name}}</td>
                        <td>{{ $estimate->email}}</td>
                        <td>{{ $estimate->phone}}</td>
                        <td>
                            <div class-"answers">
                                    <p>{{ __('app.Question') }}: {{ $estimate->question }}</p>
                                    <p style="padding:10px 20px; background-color: #e4e4e4">{{ __('app.Answer') }}: {{ $estimate->answer }}</p>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        Developer: {{ $estimate->dev_cost }}
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        Designer: {{ $estimate->des_cost }}
                                    </div>
                                </div>
                                <p class="text-center" style="color: red;padding: 35px 0px 0px;">{{ __('app.Total') }}: {{ $estimate->dev_cost+$estimate->des_cost }} </p>
                            </div>
                            <hr>                            
                        </td>
                        <td>
                            <a href="{{ url('admin/'.$estimate->id.'/delete_all_user_estimate') }}"  id="delete">
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
