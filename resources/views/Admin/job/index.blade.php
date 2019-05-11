@extends('admin.layouts.app')

@section('title')
    Fekra| {{ trans('app.Jobs') }}
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
                <li><a href="{{ url('/work') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="active">{{ trans('app.Jobs') }}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{ trans('app.All Jobs') }}</h5>
            <a href="{{ url('admin/add_job') }}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>{{ trans('app.New') }}</a>
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
                    <th>{{ trans('app.Date') }}</th>
                    <th>{{ trans('app.Location') }}</th>
                    <th>{{ trans('app.Type') }}</th>
                    <th>{{ trans('app.Experience') }}</th>
                    <th>{{ trans('app.Job Title') }}</th>
                    <th>{{ trans('app.Gender Preference') }}</th>
                    <th>{{ trans('app.Nationality') }}</th>
                    <th>{{ trans('app.Start Date') }}</th>
                    <th>{{ trans('app.Status') }}</th>
                    <th>{{ trans('app.Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $job)
                    <tr>
                        <td>{{ $job->id}}</td>
                        <td>{{ $job->date}}</td>
                        <td>{{ $job->location}}</td>
                        <td>{{ $job->type}}</td>
                        <td>{{ $job->experience}}</td>
                        <td>{{ $job->job_title}}</td>
                        <td>{{ $job->gender_preference}}</td>
                        <td>{{ $job->nationality}}</td>
                        <td>{{ $job->start_date}}</td>
                        <td>
                            @if ($job->status == 'active')
                                <span class="label label-success label-rounded">{{ trans('app.Active') }}</span>
                            @else
                                <span class="label label-danger label-rounded">{{ trans('app.Not Active') }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/'.$job->id.'/edit_job') }}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                            <a href="{{ url('admin/'.$job->id.'/delete_job') }}"  id="delete">
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
