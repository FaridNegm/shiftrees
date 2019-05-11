<?php

namespace App\Http\Controllers\Admin;

use App\EstimateApp;
use App\FormEstimate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class EstimateAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = EstimateApp::select('*')->orderBy('id', 'DESC')->get();
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
            'question' => 'required',
            'type' => 'required',
            'image' => 'required',
        ]);


        $image = request('image');
        $name = time() . '.' .$image->getClientOriginalExtension();
        $path= public_path('Admin/images/estimate');
        $image->move($path , $name);

        EstimateApp::create([
            'question' => request('question'),
            'type' => request('type'),
            'answer1' => request('answer1'),
            'answer1_dev_cost' => request('answer1_dev_cost'),
            'answer1_des_cost' => request('answer1_des_cost'),
            'answer2' => request('answer2'),
            'answer2_dev_cost' => request('answer2_dev_cost'),
            'answer2_des_cost' => request('answer2_des_cost'),
            'answer3' => request('answer3'),
            'answer3_dev_cost' => request('answer3_dev_cost'),
            'answer3_des_cost' => request('answer3_des_cost'),
            'answer4' => request('answer4'),
            'answer4_dev_cost' => request('answer4_dev_cost'),
            'answer4_des_cost' => request('answer4_des_cost'),
            'answer5' => request('answer5'),
            'answer5_dev_cost' => request('answer5_dev_cost'),
            'answer5_des_cost' => request('answer5_des_cost'),
            'answer6' => request('answer6'),
            'answer6_dev_cost' => request('answer6_dev_cost'),
            'answer6_des_cost' => request('answer6_des_cost'),
            'answer7' => request('answer7'),
            'answer7_dev_cost' => request('answer7_dev_cost'),
            'answer7_des_cost' => request('answer7_des_cost'),
            'answer8' => request('answer8'),
            'answer8_dev_cost' => request('answer8_dev_cost'),
            'answer8_des_cost' => request('answer8_des_cost'),
            'answer9' => request('answer9'),
            'answer9_dev_cost' => request('answer9_dev_cost'),
            'answer9_des_cost' => request('answer9_des_cost'),
            'answer10' => request('answer10'),
            'answer10_dev_cost' => request('answer10_dev_cost'),
            'answer10_des_cost' => request('answer10_des_cost'),
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
        $find = EstimateApp::findOrfail($id);
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

        DB::table('estimates_apps')->where('id' , $id)->update([
            'question' => request('question'),
            'type' => request('type'),
            'answer1' => request('answer1'),
            'answer1_dev_cost' => request('answer1_dev_cost'),
            'answer1_des_cost' => request('answer1_des_cost'),
            'answer2' => request('answer2'),
            'answer2_dev_cost' => request('answer2_dev_cost'),
            'answer2_des_cost' => request('answer2_des_cost'),
            'answer3' => request('answer3'),
            'answer3_dev_cost' => request('answer3_dev_cost'),
            'answer3_des_cost' => request('answer3_des_cost'),
            'answer4' => request('answer4'),
            'answer4_dev_cost' => request('answer4_dev_cost'),
            'answer4_des_cost' => request('answer4_des_cost'),
            'answer5' => request('answer5'),
            'answer5_dev_cost' => request('answer5_dev_cost'),
            'answer5_des_cost' => request('answer5_des_cost'),
            'answer6' => request('answer6'),
            'answer6_dev_cost' => request('answer6_dev_cost'),
            'answer6_des_cost' => request('answer6_des_cost'),
            'answer7' => request('answer7'),
            'answer7_dev_cost' => request('answer7_dev_cost'),
            'answer7_des_cost' => request('answer7_des_cost'),
            'answer8' => request('answer8'),
            'answer8_dev_cost' => request('answer8_dev_cost'),
            'answer8_des_cost' => request('answer8_des_cost'),
            'answer9' => request('answer9'),
            'answer9_dev_cost' => request('answer9_dev_cost'),
            'answer9_des_cost' => request('answer9_des_cost'),
            'answer10' => request('answer10'),
            'answer10_dev_cost' => request('answer10_dev_cost'),
            'answer10_des_cost' => request('answer10_des_cost'),
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
        $delete = EstimateApp::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }

    public function all_user_estimate()
    {
        $all = FormEstimate::select('*')->orderBy('id', 'DESC')->get();
        return view('admin/all_user_estimate/index' , compact('all'));
    }

    public function store_all_user_estimate(Request $request)
    {
        $this->validate($request , [
            'name' => 'name',
            'phone' => 'phone',
            'email' => 'email',
        ]);

        FormEstimate::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
            'message' => request('message'),
            'question' => request('question'),
            'answer' => request('answer'),
            'dev_cost' => request('dev_cost'),
            'des_cost' => request('des_cost'),
            'type' => request('type'),
        ]);

        Session::flash('success' , trans('app.Completed Added Successfully'));
        return redirect()->to('/admin/estimate');
    }

    public function all_user_estimate_destroy($id)
    {
        $delete = FormEstimate::findOrfail($id);

        $delete->delete();
        return redirect()->back()->with('success' , trans('app.Completed Delete Successfully'));
    }
}
