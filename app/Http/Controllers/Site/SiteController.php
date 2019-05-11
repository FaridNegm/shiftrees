<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\About;
use App\Service;
use App\Blog;
use App\Portfolio;
use App\Team;
use App\Partner;
use App\Job;
use App\ContactForm;
use App\Setting;

class SiteController extends Controller
{
    public function index(){
        $sliders = Slider::orderBy('id', 'DESC')->limit(3)->where('status', 'active')->get();
        $about = About::where('status', 'active')->first();
        $services = Service::where('status', 'active')->get();
        $blogs = Blog::orderBy('id', 'DESC')->limit(3)->where('status', 'active')->get();
        $portfolios = Portfolio::orderBy('id', 'DESC')->limit(6)->where('status', 'active')->get();

        return view('Site.pages.index' , compact('sliders' , 'about' , 'services' , 'blogs' , 'portfolios'));
    }

    public function about(){
        $about = About::where('status', 'active')->first();
        $teams = Team::orderBy('id', 'DESC')->limit(8)->where('status', 'active')->get();
        $partners = Partner::orderBy('id', 'DESC')->limit(4)->where('status', 'active')->get();

        return view('Site.pages.about' , compact('about' , 'teams' , 'partners'));
    }

    public function blog(){
        $blogs = Blog::orderBy('id', 'DESC')->where('status', 'active')->get();


        return view('Site.pages.blog' , compact('blogs'));
    }

    public function blog_details($id){
        $blogs = Blog::where('id', $id)->get();
        $recent = Blog::orderBy('id', 'DESC')->limit(3)->where('status', 'active')->get();
        $portfolios = Portfolio::orderBy('id', 'DESC')->limit(4)->where('status', 'active')->get();

        return view('Site.pages.blog_details' , compact('blogs' , 'recent' , 'portfolios'));
    }

    public function services(){
        $services = Service::where('status', 'active')->get();

        return view('Site.pages.service' , compact('services'));
    }

    public function jobs(){
        $jobs = Job::orderBy('id', 'DESC')->limit(4)->where('status', 'active')->get();

        return view('Site.pages.jobs' , compact('jobs'));
    }

    public function job_details($id){
        $jobs = Job::where('id', $id)->get();
        $job_name = Job::where('id', $id)->first();

        return view('Site.pages.job_details' , compact('jobs' , 'job_name'));
    }

    public function portfolio(){
        $portfolios = Portfolio::orderBy('id', 'DESC')->where('status', 'active')->get();

        return view('Site.pages.portfolio' , compact('portfolios'));
    }

    public function contact(){
        $contacts = Setting::first();

        return view('Site.pages.contact' , compact('contacts'));
    }

}
