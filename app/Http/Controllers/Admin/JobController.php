<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Job::select('*')->orderBy('id', 'DESC')->get();
        return view('admin/job/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/job/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Job::create([
            'date' => request('date'),
            'location' => request('location'),
            'type' => request('type'),
            'experience' => request('experience'),
            'job_title' => request('job_title'),
            'gender_preference' => request('gender_preference'),
            'nationality' => request('nationality'),
            'start_date' => request('start_date'),
            'description_ar' => request('description_ar'),
            'description_en' => request('description_en'),
            'required' => request('required'),
            'status' => request('status'),
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/job');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find = Job::where('id' , $id)->first();
        return view('admin/job/form' , compact('find'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        DB::table('jobs')->where('id' , $id)->update([
            'date' => request('date'),
            'location' => request('location'),
            'type' => request('type'),
            'experience' => request('experience'),
            'job_title' => request('job_title'),
            'gender_preference' => request('gender_preference'),
            'nationality' => request('nationality'),
            'start_date' => request('start_date'),
            'description_ar' => request('description_ar'),
            'description_en' => request('description_en'),
            'required' => request('required'),
            'status' => request('status'),
        ]);

        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->to('/admin/job');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Job::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
