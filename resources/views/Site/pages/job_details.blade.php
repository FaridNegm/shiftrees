@extends('Site.layouts.app')

@section('title')
    SHIFTERS
@endsection

@section('header')

@endsection

@section('content')

    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('Site/images/about_us_page.jpg');">

    </section>

    <!-- Job Title -->
	<section class="sec-about bg4 p-t-80 p-b-90">
        <div class="container">
            <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                <span style="position:relative;top:-3px;">ــــــــ </span>  WEB DEVELOPER  <span style="position:relative;top:-3px;">ــــــــ </span>
            </h3>

            <div class="row">

            @foreach ($jobs as $job)
                <div class="col-md-6">

                    <div class="job_details">
                        <div>
                            <span class="title">LOCATION: </span>
                            <span class="details">
                                {{ $job->location }}
                            </span>
                        </div>
                        <div>
                            <span class="title">TYPE: </span>
                            <span class="details">
                                    {{ $job->type }}
                            </span>
                        </div>
                        <div>
                            <span class="title">EXPERIENCE: </span>
                            <span class="details">
                                    {{ $job->experience }}
                            </span>
                        </div>
                        <div>
                            <span class="title">JOB TITLE: </span>
                            <span class="details">
                                    {{ $job->job_title }}
                            </span>
                        </div>
                        <div>
                            <span class="title">GENDER PREFERENCE: </span>
                            <span class="details">
                                    {{ $job->gender_preference }}
                            </span>
                        </div>
                        <div>
                            <span class="title">NATIONALITY: </span>
                            <span class="details">
                                    {{ $job->nationality }}
                            </span>
                        </div>
                        <div>
                            <span class="title">START DATE: </span>
                            <span class="details">
                                    {{ $job->start_date }}
                            </span>
                        </div>


                        <button class="btn btn-primary btn-gemy-1" data-toggle="modal" data-target="#exampleModal">Applay Job</button>

                    </div><!--end job details-->

                </div><!--end col-6-->
                @endforeach

            <div class="col-md-6">

            <h3 class="job_requireds_h3">
				Required
			</h3>
			<div class="requireds">
                <ul>
                        @foreach ($jobs as $job)
					<li>
						{{-- <i class="fa fa-chevron-right"></i> --}}
						<span>{!! $job->required !!}</span>
					</li>
                    @endforeach
                </ul>
			</div>

            </div><!--end col-6-->


            </div><!--end row-->

        </div><!--end container-->
    </section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">WEB DEVELOPER</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="    margin: -40px 0px;">
					<div class="col-xs-12 contact_us_form">
                        <form method="post" action="{{ url('admin/apply_job') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" class="form-control" name="job_name" placeholder="Name" value="{{ $job_name['job_title']  }}">
							<div class="form-group col-md-6 col-xs-12 pull-left">
								<input type="text" class="form-control" name="name" placeholder="Name" required>
							</div>
							<div class="form-group col-md-6 col-xs-12 pull-right">
								<input type="number" class="form-control" name="phone" placeholder="Phone Number" >
							</div>
							<div class="form-group col-md-6 col-xs-12 pull-right">
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
							<div class="form-group col-md-6 col-xs-12 pull-right">
								<input type="date" class="form-control" name="birthday" placeholder="Date Of Birth">
							</div>
							<div class="form-group col-md-6 col-xs-12 pull-left">
								<input type="text" class="form-control" name="nationality" placeholder="Nationality">
							</div>
							<div class="form-group col-md-6 col-xs-12 pull-left">
								<input type="text" class="form-control" name="university" placeholder="University" required>
							</div>
							<div class="form-group col-md-6 col-xs-12 pull-left">
								<input type="number" class="form-control" name="graduation_year" placeholder="Graduation Year" required>
							</div>
							<div class="form-group col-md-6 col-xs-12 pull-left">
								<input type="text" class="form-control" name="city" placeholder="City Of Residence">
							</div>
							<div class="form-group col-md-6 col-xs-12 pull-left">
								<input type="text" class="form-control" name="last_salary" placeholder="Last Salary" required>
							</div>
							<div class="form-group col-md-6 col-xs-12 pull-left">
								<input type="text" class="form-control" name="expected_salary" placeholder="Expected Salary" required>
							</div>
							<div class="form-group col-xs-12">
								<input type="file" class="form-control" name="file">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
							<button class="btn btn-default clear">Clear</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('footer')
    @include('Admin/layouts/message')

    <!-- Theme JS files -->
    <script src="{{ url('Admin') }}/js/plugins/notifications/noty.min.js"></script>
    <script src="{{ url('Admin') }}/js/plugins/notifications/jgrowl.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.clear').click(function(e){
                e.preventDefault();
                $('input').val('');
            });

            if('form input' == ''){
                alert('write');
            }
        });
    </script>
@endsection
