@extends('admin.layouts.app')

@section('title')
    Fekra| {{ trans('app.Apply Job Messages') }}
@endsection

@section('header')

@endsection

@section('content')

<!-- Content area -->
<div class="content">

    <!-- Single line -->
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">{{ trans('app.All Messages') }}</h6>

            <div class="heading-elements not-collapsible">
                <span class="label bg-blue heading-text" style="padding: 5px; font-size: 12px;margin: 0px 0px 10px;">Total Messages:  <span style="color:red;font-size: 16px;font-weight: bold;margin-left: 5px;background-color: #FFF;padding: 5px;">{{ count($all) }}</span></span>
            </div>
        </div>

        <div class="panel-toolbar panel-toolbar-inbox">
            <div class="navbar navbar-default">
                <ul class="nav navbar-nav visible-xs-block no-border">
                    <li>
                        <a class="text-center collapsed" data-toggle="collapse" data-target="#inbox-toolbar-toggle-single">
                            <i class="icon-circle-down2"></i>
                        </a>
                    </li>
                </ul>

                <div class="navbar-collapse collapse" id="inbox-toolbar-toggle-single">
                    <div class="btn-group navbar-btn">
                        <button type="button" class="btn btn-default btn-icon btn-checkbox-all">
                            <input type="checkbox" class="styled">
                        </button>

                        <button type="button" class="btn btn-default btn-icon dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                            <li><a href="#">Select all</a></li>
                        </ul>
                    </div>

                    <div class="btn-group navbar-btn">
                        <button type="button" class="btn btn-default" style="color:red;"><i class="icon-bin"></i> <span class="hidden-xs position-right">Delete</span></button>
                    </div>


                </div>
            </div>
        </div>

                <table class="table table-bordered table-hover datatable-highlight">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="styled"></th>
                        <th>{{ trans('app.Job_Name') }}</th>
                        <th>{{ trans('app.Name') }}</th>
                        <th>{{ trans('app.Phone') }}</th>
                        <th>{{ trans('app.University') }}</th>
                        <th>{{ trans('app.Graduation_year') }}</th>
                        <th>{{ trans('app.Last_Salary') }}</th>
                        <th>{{ trans('app.Expected_Salary') }}</th>
                        <th>{{ trans('app.Date') }}</th>
                        <th>{{ trans('app.Actions') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($all as $message)
                        <tr>
                            <td><input type="checkbox" class="styled"></td>
                            <td>{{ $message->job_name }}</td>
                            <td style="color: red;">{{ $message->name }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->university }}</td>
                            <td>{{ $message->graduation_year }}</td>
                            <td>{{ $message->last_salary }}</td>
                            <td>{{ $message->expected_salary }}</td>
                            <td>{{ $message->created_at->diffForHumans() }}</td>

                            <td>
                                <a href="{{ url('admin/show_apply_job'.$message->id) }}" >
                                    <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-eye"></i></span>
                                </a>

                                <a href="{{ url('admin/'.$message->id.'/delete_apply_job') }}"  id="delete">
                                    <span class="label label-danger label-rounded label-icon"><i class="icon-trash"></i></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>


    <!-- Footer -->
    <div class="footer text-muted">
        &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
    </div>
    <!-- /footer -->

</div>
<!-- /content area -->

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
