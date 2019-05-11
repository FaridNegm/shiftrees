<?php

namespace App\Http\Controllers\Admin;

use App\Estimate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class EstimateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Estimate::select('*')->orderBy('id', 'DESC')->get();
        return view('admin/estimate/index' , compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/estimate/form');
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'on_hour_developer_cost' => 'required',
            'on_hour_designer_cost' => 'required',
            'question' => 'required',
            'image' => 'required'
        ]);


        $image = request('image');
        $name = time() . '.' .$image->getClientOriginalExtension();
        $path= public_path('Admin/images/estimate');
        $image->move($path , $name);

        Estimate::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
            'message' => request('message'),
            'on_hour_developer_cost' => request('on_hour_developer_cost'),
            'on_hour_designer_cost' => request('on_hour_designer_cost'),
            'question' => request('question'),
            'answer1' => request('answer1'),
            'answer2' => request('answer2'),
            'answer3' => request('answer3'),
            'answer4' => request('answer4'),
            'answer5' => request('answer5'),
            'answer6' => request('answer6'),
            'answer7' => request('answer7'),
            'answer8' => request('answer8'),
            'answer9' => request('answer9'),
            'answer10' => request('answer10'),
            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/estimate');
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
        $find = Estimate::where('id' , $id)->first();
        return view('admin/estimate/form' , compact('find'));
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'on_hour_developer_cost' => 'required',
            'on_hour_designer_cost' => 'required',
            'question' => 'required',
        ]);

        if(request('image') == ''){
            $name =  request('df_image');
        }else{
            $image = request('image');
            $name = time() . '.' .$image->getClientOriginalExtension();
            $path= public_path('Admin/images/estimate');
            $image->move($path , $name);
        }

        DB::table('estimates')->where('id' , $id)->update([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
            'message' => request('message'),
            'on_hour_developer_cost' => request('on_hour_developer_cost'),
            'on_hour_designer_cost' => request('on_hour_designer_cost'),
            'question' => request('question'),
            'answer1' => request('answer1'),
            'answer2' => request('answer2'),
            'answer3' => request('answer3'),
            'answer4' => request('answer4'),
            'answer5' => request('answer5'),
            'answer6' => request('answer6'),
            'answer7' => request('answer7'),
            'answer8' => request('answer8'),
            'answer9' => request('answer9'),
            'answer10' => request('answer10'),
            'image' => $name,
        ]);

        Session::flash('success' , trans('app.Completed Update Successfully'));
        return redirect()->to('/admin/estimate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Estimate::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
