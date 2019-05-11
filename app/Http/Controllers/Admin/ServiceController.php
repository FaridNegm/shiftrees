<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Service::select('*')->orderBy('id', 'DESC')->get();
        return view('admin/services/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/services/form');
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
            'description_ar' => 'required|string|min:50',
            'description_en' => 'required|string|min:50',
            'image' => 'required'
        ]);


        $image = request('image');
        $name = time() . '.' .$image->getClientOriginalExtension();
        $path= public_path('Admin/images/service');
        $image->move($path , $name);

        Service::create([
            'title_ar' => request('title_ar'),
            'title_en' => request('title_en'),
            'description_ar' => request('description_ar'),
            'description_en' => request('description_en'),
            'status' => request('status'),
            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/services');
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
        $find = Service::where('id' , $id)->first();
        return view('admin/services/form' , compact('find'));
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
            'description_ar' => 'required|string|min:50',
            'description_en' => 'required|string|min:50',
        ]);

        if(request('image') == ''){
            $name =  request('df_image');
        }else{
            $image = request('image');
            $name = time() . '.' .$image->getClientOriginalExtension();
            $path= public_path('Admin/images/service');
            $image->move($path , $name);
        }

        DB::table('services')->where('id' , $id)->update([
            'title_ar' => request('title_ar'),
            'title_en' => request('title_en'),
            'description_ar' => request('description_ar'),
            'description_en' => request('description_en'),
            'status' => request('status'),
            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->to('/admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Service::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
