<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Setting::select('*')->orderBy('id', 'DESC')->get();
        return view('admin/setting/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/setting/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = request('image');
        $name = time() . '.' .$image->getClientOriginalExtension();
        $path= public_path('Admin/images/setting');
        $image->move($path , $name);

        Setting::create([
            'title_ar' => request('title_ar'),
            'title_en' => request('title_en'),
            'description_ar' => request('description_ar'),
            'description_en' => request('description_en'),
            'contact_description_ar' => request('contact_description_ar'),
            'contact_description_en' => request('contact_description_en'),
            'contact_image' => $name,
            'facebook' => request('facebook'),
            'whatsapp' => request('whatsapp'),
            'twitter' => request('twitter'),
            'address2' => request('address2'),
            'linkedin' => request('linkedin'),
            'gmail' => request('gmail'),
            'email' => request('email'),
            'location_map' => request('location_map'),
            'location_map2' => request('location_map2'),
            'address' => request('address'),
            'phone' => request('phone'),
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/setting');
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
        $find = Setting::where('id' , $id)->first();
        return view('admin/setting/form' , compact('find'));
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
            $path= public_path('Admin/images/setting');
            $image->move($path , $name);
        }

        DB::table('settings')->where('id' , $id)->update([
            'title_ar' => request('title_ar'),
            'title_en' => request('title_en'),
            'description_ar' => request('description_ar'),
            'description_en' => request('description_en'),
            'contact_description_ar' => request('contact_description_ar'),
            'contact_description_en' => request('contact_description_en'),
            'contact_image' => $name,
            'facebook' => request('facebook'),
            'whatsapp' => request('whatsapp'),
            'twitter' => request('twitter'),
            'linkedin' => request('linkedin'),
            'gmail' => request('gmail'),
            'email' => request('email'),
            'location_map' => request('location_map'),
            'location_map2' => request('location_map2'),
            'address' => request('address'),
            'address2' => request('address2'),
            'phone' => request('phone'),
        ]);

        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->to('/admin/setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Setting::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
