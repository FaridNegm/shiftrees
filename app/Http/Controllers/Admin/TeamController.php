<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Team::select('*')->orderBy('id', 'DESC')->get();
        return view('admin/team/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/team/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'title_ar' => 'required|string|min:5|max:255',
            'title_en' => 'required|string|min:5|max:255',
            'job_ar' => 'required|string',
            'job_en' => 'required|string',
            'image' => 'required'
        ]);


        $image = request('image');
        $name = time() . '.' .$image->getClientOriginalExtension();
        $path= public_path('Admin/images/team');
        $image->move($path , $name);

        Team::create([
            'title_ar' => request('title_ar'),
            'title_en' => request('title_en'),
            'job_ar' => request('job_ar'),
            'job_en' => request('job_en'),
            'status' => request('status'),
            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/team');
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
        $find = Team::where('id' , $id)->first();
        return view('admin/team/form' , compact('find'));
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

        $this->validate($request , [
            'title_ar' => 'required|string|min:5|max:255',
            'title_en' => 'required|string|min:5|max:255',
            'job_ar' => 'required|string',
            'job_en' => 'required|string',
        ]);

        if(request('image') == ''){
            $name =  request('df_image');
        }else{
            $image = request('image');
            $name = time() . '.' .$image->getClientOriginalExtension();
            $path= public_path('Admin/images/team');
            $image->move($path , $name);
        }

        DB::table('teams')->where('id' , $id)->update([
            'title_ar' => request('title_ar'),
            'title_en' => request('title_en'),
            'job_ar' => request('job_ar'),
            'job_en' => request('job_en'),
            'status' => request('status'),
            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->to('/admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Team::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
