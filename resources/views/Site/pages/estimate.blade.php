@extends('Site.layouts.app')

@section('title')
    SHIFTERS| {{ trans('app.Contact Us') }}
@endsection

@section('header')

@endsection

@section('content')

    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('Site/images/about_us_page.jpg');">

    </section>

    <!-- Job Title -->
	<section class="estimate">
        <div class="container">
            <div class="row">
                <h3 class="l2-txt2 p-b-2 txt-center about_us_h3">
                    <span style="position:relative;top:-3px;">ــــــــ </span>  ESTIMATE MY APP  <span style="position:relative;top:-3px;">ــــــــ </span>
                </h3>

                <form method="post" action="{{ url('estimate') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group main_div text-center">
                        <h6 class="" style="color:#222;font-weight: bold;text-align: center;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex exercitationem
                        </h6>

                        <div class="col-md-4 estimate_div float-left">
                            <label class="col-xs-5 image_input pull-left" for="andriod"><img src="{{ url('Website/images/estimate/android.png')}}" class="img-responsive" /></label>
                            <span class="col-xs-7 pull-right input_label">
                                <input type="radio" class="form-control" id="andriod" name="andriod" value="big_app">
                                <label for="andriod">Andriod</label>
                                <!-- <label for="app1" style="font-size:10px;width:100%;color:gray;">web app or back end to mobile app</label> -->
                            </span>
                        </div>
                        <div class="col-md-4 estimate_div float-left">
                            <label class="col-xs-5 image_input pull-left" for="apple"><img src="{{ url('Website/images/estimate/apple.png')}}" class="img-responsive" /></label>
                            <span class="col-xs-7 pull-right input_label">
                                <input type="radio" class="form-control" id="apple" name="apple" value="big_app">
                                <label for="apple">Apple</label>
                            </span>
                        </div>
                        <div class="col-md-4 estimate_div float-left">
                            <label class="col-xs-5 image_input pull-left" for="web"><img src="{{ url('Website/images/estimate/internet.png')}}" class="img-responsive" /></label>
                            <span class="col-xs-7 pull-right input_label">
                                <input type="radio" class="form-control" id="web" name="web" value="big_app">
                                <label for="web">Web</label>
                            </span>
                        </div>
                    </div>

                    @foreach ($all as $estimate)
                        <div class="form-group main_div text-center">
                            <h6 class="" style="color:#222;font-weight: bold;text-align: left;padding-left: 100px;">
                                {{ $estimate->question }}
                            </h6>

                            <input type="hidden" class="form-control" name="question_{{ $estimate->id }}" value="{{ $estimate->question }}">
                            <input type="hidden" class="form-control" name="{{ $estimate->id }}" value="{{ $estimate->id }}">

                            @if(isset( $estimate->answer1 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer1" name="{{$estimate->id}}" value="{{$estimate->answer1 }}">
                                        <label for="answer1">{{ $estimate->answer1 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer1_des_cost" value="{{ $estimate->answer1_des_cost }}">
                                    <input type="hidden" class="form-control" name="answer1_des_cost" value="{{ $estimate->answer1_des_cost }}">
                                </div>
                            @endif
                            @if(isset( $estimate->answer2 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer2" name="option_{{$estimate->id}}" value="{{$estimate->answer2 }}">
                                        <label for="answer2">{{ $estimate->answer2 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer2_dev_cost" value="{{ $estimate->answer2_dev_cost }}">
                                    <input type="hidden" class="form-control" name="answer2_des_cost" value="{{ $estimate->answer2_des_cost }}">
                                </div>
                            @endif
                            @if(isset( $estimate->answer3 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer3" name="option_{{$estimate->id}}" value="{{$estimate->answer3}}">
                                        <label for="answer3">{{ $estimate->answer3 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer3_dev_cost" value="{{ $estimate->answer3_dev_cost }}">
                                    <input type="hidden" class="form-control" name="answer3_des_cost" value="{{ $estimate->answer3_des_cost }}">
                                </div>
                            @endif
                            @if(isset( $estimate->answer4 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer4" name="option_{{$estimate->id}}" value="{{$estimate->answer4 }}">
                                        <label for="answer4">{{ $estimate->answer4 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer4_dev_cost" value="{{ $estimate->answer4_dev_cost }}">
                                    <input type="hidden" class="form-control" name="answer4_des_cost" value="{{ $estimate->answer4_des_cost }}">
                                </div>
                            @endif
                            @if(isset( $estimate->answer5 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer5" name="option_{{$estimate->id}}" value="{{$estimate->answer5 }}">
                                        <label for="answer5">{{ $estimate->answer5 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer5_dev_cost" value="{{ $estimate->answer5_dev_cost }}">
                                    <input type="hidden" class="form-control" name="answer5_des_cost" value="{{ $estimate->answer5_des_cost }}">
                                </div>
                            @endif
                            @if(isset( $estimate->answer6 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer6" name="option_{{$estimate->id}}" value="{{$estimate->answer6 }}">
                                        <label for="answer6">{{ $estimate->answer6 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer6_dev_cost" value="{{ $estimate->answer6_dev_cost }}">
                                    <input type="hidden" class="form-control" name="answer6_des_cost" value="{{ $estimate->answer6_des_cost }}">
                                </div>
                            @endif
                            @if(isset( $estimate->answer7 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer7" name="option_{{$estimate->id}}" value="{{$estimate->answer7 }}">
                                        <label for="answer7">{{ $estimate->answer7 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer7_dev_cost" value="{{ $estimate->answer7_dev_cost }}">
                                    <input type="hidden" class="form-control" name="answer7_des_cost" value="{{ $estimate->answer7_des_cost }}">
                                </div>
                            @endif
                            @if(isset( $estimate->answer8 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer8" name="option_{{$estimate->id}}" value="{{$estimate->answer8 }}">
                                        <label for="answer8">{{ $estimate->answer8 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer8_dev_cost" value="{{ $estimate->answer8_dev_cost }}">
                                    <input type="hidden" class="form-control" name="answer8_des_cost" value="{{ $estimate->answer8_des_cost }}">
                                </div>
                            @endif
                            @if(isset( $estimate->answer9 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer9" name="option_{{$estimate->id}}" value="{{$estimate->answer9 }}">
                                        <label for="answer9">{{ $estimate->answer9 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer9_dev_cost" value="{{ $estimate->answer9_dev_cost }}">
                                    <input type="hidden" class="form-control" name="answer9_des_cost" value="{{ $estimate->answer9_des_cost }}">
                                </div>
                            @endif
                            @if(isset( $estimate->answer10 ))
                                <div class="col-md-4 estimate_div float-left">
                                    <label class="col-xs-5 image_input pull-left" for="app1"><img src="{{ url('Admin/images/estimate/'.$estimate->image)}}" class="img-responsive" /></label>
                                    <span class="col-xs-7 pull-right input_label">
                                        <input type="radio" class="form-control" id="answer10" name="option_{{$estimate->id}}" value="{{$estimate->answer10 }}">
                                        <label for="answer10">{{ $estimate->answer10 }}</label>
                                    </span>

                                    <input type="hidden" class="form-control" name="answer10_dev_cost" value="{{ $estimate->answer10_dev_cost }}">
                                    <input type="hidden" class="form-control" name="answer10_des_cost" value="{{ $estimate->answer10_des_cost }}">
                                </div>
                            @endif
                        </div>
                    @endforeach

                    {{--  Etimate Form  --}}
                    <div class="form-group main_div contact text-center" style="display: block;margin-top: 30px;">
                        <h6 class="" style="color:#222;font-weight: bold;text-align: center;">
                            Final Put Your Phone,Email To Contact?
                        </h6>

                        <div class="col-md-6 col-xs-12 pull-left">
                            <div class="form-group col-md-6 col-xs-12 float-left">
                                <label for="name" style="text-align: left;">Name</label>
                                <input type="text" class="form-control" id="name" name="name" >
                            </div>
                            <div class="form-group col-md-6 col-xs-12 float-left">
                                <label for="phone" style="text-align: left;">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" >
                            </div>
                            <div class="form-group col-md-6 col-xs-12 float-left">
                                <label for="address" style="text-align: left;">Address</label>
                                <input type="text" class="form-control" id="address" name="address" >
                            </div>
                            <div class="form-group col-md-6 col-xs-12 float-left">
                                <label for="em" style="text-align: left;">Email</label>
                                <input type="email" class="form-control" id="em" name="email" >
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 pull-right">
                            <div class="form-group">
                                <label for="message" style="text-align: left;">message</label>
                                <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Estimate My App</button>
                </form>
            </div>
        </div>
    </section>

    {{--  <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom:200px;">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eius nulla fugiat necessitatibus. Earum exercitationem commodi accusamus maiores a quasi soluta nesciunt adipisci maxime asperiores labore nemo possimus, eum facilis?</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">! Incidunt iste debitis adipisci. Quam, mollitia suscipit.</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">consectetur adipisicing elit. Ab eius nulla fugiat necessitatibus. Earum exercitationem commodi accusamus maiores a quasi soluta nesciunt adipisci</div>
    </div>  --}}

@endsection

@section('footer')
    <script>
        $(document).ready(function(){
            $('.clear').click(function(e){
                e.preventDefault();
                $('input').val('');
                $('textarea').val('');
            });

            if('form input' == ''){
                alert('write');
            }
        });
    </script>
@endsection
