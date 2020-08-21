<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['slider']=DB::table('front_slider')->get();
        return view('front.master_front',$data);
    }
    public function about_head()
    {
        return view('front.pages.about_head');
    }
    public function management()
    {
        return view('front.pages.management');
    }
    public function corporate_client()
    {
        return view('front.pages.corporate_client');
    }
    public function appointment()
    {
        $data=array();
        $data['dr_list']=DB::table('doctor')->get();
        $data['dept_list'] = DB::table('department')->get();
        return view('front.pages.appointment',$data);
    }
    public function admission()
    {
        return view('front.pages.admission');
    }
    public function labtest_fee()
    {
        return view('front.pages.labtest_fee');
    }
    public function room_rent()
    {
        return view('front.pages.room_rent');
    }
    public function patient_feedback()
    {
        return view('front.pages.patient_feedback');
    }
    public function service()
    {
        return view('front.pages.service');
    }
    public function visitors()
    {
        return view('front.pages.visitors');
    }
    public function department()
    {
        $data['dept_view'] = DB::table('department')->get();
        return view('front.pages.department',$data);
    }
    public function contact()
    {
        return view('front.pages.contact');
    }
    public function dept_details($id)
    {
         $dept_details=DB::table('department')->where('id',$id)->first();
        return view('front.pages.dept_details',compact('dept_details'));
    }
    public function drview_details($id)
    {
         $drview_details=DB::table('doctor')->where('id',$id)->first();
        return view('front.pages.drview_details',compact('drview_details'));
    }
    public function dr_home()
    {
        $data['front_dr']=DB::table('doctor')->get();
        return view('front.pages.dr_home',$data);
    }

    public function front_birth(){
        $data=array();
        $data['patient_list']=DB::table('patient')->get();
        $data['dr_list']=DB::table('doctor')->get();
        return view('front.pages.front_birth',$data);
    }
    public function front_death(){
        $data=array();
        $data['patient_list']=DB::table('patient')->get();
        $data['dr_list']=DB::table('doctor')->get();
        return view('front.pages.front_death',$data);
    }


    public function contactinsert(Request $request){
        $data=array();
        $time=time();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['subject']=$request->subject;
        $data['gender']=$request->gender;
        $data['description']=$request->description;
        $data['created_at']=date("Y-m-d H:i:s",$time);
        $result = DB::table('hms_contact')->insert($data);
     //Set Message
        \Session::flash('message','Insert Data sucessfully');
     return redirect()->route('contact');
    }
    public function inbox(){
        $inboxlist = DB::table('hms_contact')->get();
        return view('admin.pages.inbox',compact('inboxlist'));
    }
    public function inboxdelete($id)
   {
   $inboxlist = DB::table('hms_contact')->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfully');
    return redirect()->route('inbox');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
