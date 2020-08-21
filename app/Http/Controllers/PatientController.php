<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
class PatientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $table = 'patient';
    public function patientadd()
    {

        return view('admin.pages.patientadd');
    }
    public function patientlist()
    {
      $patientlist = DB::table($this->table)->where('type',1)->get();
      return view('admin.pages.patientlist',compact('patientlist'));

    }
    public function patientedit($id)
    {
      $patient = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.patientedit', compact('patient'));
    }

//patient inert delete update
    public function patientinsert(Request $request)
    {
        $data= array();
        $data2= array();
        $time = time();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['user_role']="patient";
        $data['password']=Hash::make($request->mobile);
        $data['created_at']=date("Y-m-d H:i:s",$time);
        $user_id= DB::table('users')->insertGetId($data);
         $data2['user_id']=$user_id;
        $data2['name']=$request->name;
        $data2['email']=$request->email;
        $data2['mobile']=$request->mobile;
        $data2['gender']=$request->gender;
        $data2['bloodGroup']=$request->bloodGroup;
        $data2['address']=$request->address;
        $data2['dob']=$request->dob;
        $data2['reference']=$request->reference;
        $data2['referencetype']=$request->referencetype;
        $data2['type']=$request->type;
        $data2['created_at']=date("Y-m-d H:i:s",$time);

        $result =DB::table('patient')->insert($data2);
        return redirect()->route('patientlist');
    }
    public function patientview($id){
      $result = DB::table('patient')->where('id',$id)->first();
      return view('admin.pages.patientview')->with('result',$result);
    }

    public function patientdelete($id)
    {
      $patientlist = DB::table('patient')->where('id',$id)->delete();
      //Set Message
         \Session::flash('message','Delete sucessfuly');
      return redirect()->route('patientlist');
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
    public function patientupdate(Request $request, $id)
    {
      $data= array();
      $time = time();
      $data['name']=$request->name;
      $data['email']=$request->email;
      $data['mobile']=$request->mobile;
      $data['gender']=$request->gender;
      $data['bloodGroup']=$request->bloodGroup;
      $data['address']=$request->address;
      $data['dob']=$request->dob;
      $data['reference']=$request->reference;
      $data['referencetype']=$request->referencetype;
      $data['type']=$request->type;
      $data['created_at']=date("Y-m-d H:i:s",$time);
      $result = DB::table('patient')->where('id',$id)->update($data);
      return redirect()->route('patientlist');
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


    //outdoor patient
    public function patientaddout()
    {

        return view('admin.pages.patientaddout');
    }
    public function patientlistout()
    {
        $patientlistout = DB::table($this->table)->where('type',0)->get();
        return view('admin.pages.patientlistout',compact('patientlistout'));
    }
    public function patienteditout($id)
    {
      $patientout = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.patienteditout', compact('patientout'));
    }

  //patient inert delete update
    public function patientinsertout(Request $request)
    {
        $data= array();
        $time = time();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['mobile']=$request->mobile;
        $data['gender']=$request->gender;
        $data['bloodGroup']=$request->bloodGroup;
        $data['address']=$request->address;
        $data['dob']=$request->dob;
        $data['reference']=$request->reference;
        $data['referencetype']=$request->referencetype;
        $data['type']=$request->type;
        $data['created_at']=date("Y-m-d H:i:s",$time);
        $result =DB::table('patient')->insert($data);
        return redirect()->route('patientlistout');
    }


    public function patientoutdelete($id)
    {
      $patientlistout = DB::table('patient')->where('id',$id)->delete();
      //Set Message
         \Session::flash('message','Delete sucessfuly');
      return redirect()->route('patientlistout');
    }
    public function patientupdateout(Request $request, $id)
    {
      $data= array();
      $time = time();
      $data['name']=$request->name;
      $data['email']=$request->email;
      $data['mobile']=$request->mobile;
      $data['gender']=$request->gender;
      $data['bloodGroup']=$request->bloodGroup;
      $data['address']=$request->address;
      $data['dob']=$request->dob;
      $data['reference']=$request->reference;
      $data['referencetype']=$request->referencetype;
      $data['type']=$request->type;
      $data['created_at']=date("Y-m-d H:i:s",$time);
      $result = DB::table('patient')->where('id',$id)->update($data);
      return redirect()->route('patientlistout');
    }
    public function patientviewout($id){
       $result = DB::table('patient')->where('id',$id)->first();
      return view('admin.pages.patientviewout')->with('result',$result);
    }

}
