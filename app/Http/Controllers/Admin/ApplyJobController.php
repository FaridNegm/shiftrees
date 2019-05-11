<?php

namespace App\Http\Controllers\Admin;

use App\ApplyJob;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
class ApplyJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = ApplyJob::all();

        return view('admin/apply_job/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(request('file') == ''){
            $file = '';
        }else{
            $file = request('file');
            $path = public_path('Admin/jobs_cv');
            $file->move($path , $file);
        }

        ApplyJob::create([
            'job_name' => request('job_name'),
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'nationality' => request('nationality'),
            'birthday' => request('birthday'),
            'university' => request('university'),
            'graduation_year' => request('graduation_year'),
            'city' => request('city'),
            'last_salary' => request('last_salary'),
            'expected_salary' => request('expected_salary'),
            'file' => $file,
        ]);

        Session::flash('success' , trans('app.Message Sended Successfully'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find = ApplyJob::where('id' , $id)->first();
        return view('admin/apply_job/form' , compact('find'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ApplyJob::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
