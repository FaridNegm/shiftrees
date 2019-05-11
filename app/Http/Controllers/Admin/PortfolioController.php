<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Portfolio::select('*')->orderBy('id', 'DESC')->get();
        return view('admin/portfolio/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/portfolio/form');
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
            'type' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);


        $image = request('image');
        $name = time() . '.' .$image->getClientOriginalExtension();
        $path= public_path('Admin/images/portfolio');
        $image->move($path , $name);

        Portfolio::create([
            'title_ar' => request('title_ar'),
            'title_en' => request('title_en'),
            'description_ar' => request('description_ar'),
            'description_en' => request('description_en'),
            'type' => request('type'),
            'url' => request('url'),
            'status' => request('status'),
            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/portfolio');
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
        $find = Portfolio::where('id' , $id)->first();
        return view('admin/portfolio/form' , compact('find'));
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

        if(request('image') == ''){
            $name =  request('df_image');
        }else{
            $image = request('image');
            $name = time() . '.' .$image->getClientOriginalExtension();
            $path= public_path('Admin/images/portfolio');
            $image->move($path , $name);
        }

        DB::table('portfolios')->where('id' , $id)->update([
            'title_ar' => request('title_ar'),
            'title_en' => request('title_en'),
            'description_ar' => request('description_ar'),
            'description_en' => request('description_en'),
            'type' => request('type'),
            'url' => request('url'),
            'status' => request('status'),
            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->to('/admin/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Portfolio::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}

