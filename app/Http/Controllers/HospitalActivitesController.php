<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;
use PDF;
class HospitalActivitesController extends Controller
{

    public function generatePDF($birth_id)
    {
        $data=array();
        $data['result'] = DB::table('hms_birth')->where('birth_id',$birth_id)->first();
        //$data = ['title' => 'Welcome to hms.com'];
        $pdf = PDF::loadView('admin.pages.birthview',$data);

        return $pdf->download('hms.pdf');
    }
    public function birthadd(){
        $data=array();
      $data['dr_list']=DB::table('doctor')->get();
      $data['patient_list']=DB::table('patient')->get();
    	return view('admin.pages.birthadd',$data);
    }
    public function birthlist(){
        $user_role = Session::get('user_role');
        if($user_role == 'patient'){
            $birthlist = DB::table('hms_birth')
                ->join('patient','hms_birth.patient_id','=','patient.patient_code')
                ->where('user_id',Auth::id())
                ->get();
        }else{
            $birthlist = DB::table('hms_birth')->get();
        }

    	return view('admin.pages.birthlist',compact('birthlist'));
    }

    public function birthinsert(Request $request){
    	$data=array();
    	$time=time();
    	$data['birth_id']=$request->birth_id;
    	$data['cname']=$request->cname;
    	$data['fname']=$request->fname;
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['patient_id']=$request->patient_id;
    	$data['doctor_id']=$request->doctor_id;
    	$data['date']=$request->date;
    	$data['status']=$request->status;
    	$data['created_at']=date("Y-m-d H:i:s",$time);
    	$result = DB::table('hms_birth')->insert($data);
     //Set Message
        \Session::flash('message','Insert Data sucessfully');
     return redirect()->route('birthadd');
    }
public function front_birthinsert(Request $request){
    	$data=array();
    	$time=time();
    	$data['birth_id']=$request->birth_id;
    	$data['cname']=$request->cname;
    	$data['fname']=$request->fname;
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['patient_id']=$request->patient_id;
    	$data['doctor_id']=$request->doctor_id;
    	$data['date']=$request->date;
    	$data['status']=$request->status;
    	$data['created_at']=date("Y-m-d H:i:s",$time);
    	$result = DB::table('hms_birth')->insert($data);
      //Set Message
           \Session::flash('message','your Birth Certificate request are recived sucessfully....Wait few minute For a confiramtion sms in your phone number');
     return redirect()->route('front_birth');
    }

    public function birthedit($birth_id){
  $birth_edit = DB::table('hms_birth')->where('birth_id',$birth_id)->first();
    	return view('admin.pages.birthedit',compact('birth_edit'));
    }

    public function birthupdate(Request $request, $birth_id){
    $data=array();
    	$time=time();
    	$data['cname']=$request->cname;
    	$data['fname']=$request->fname;
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['patient_id']=$request->patient_id;
    	$data['doctor_id']=$request->doctor_id;
    	$data['date']=$request->date;
    	$data['status']=$request->status;
    	$data['created_at']=date("Y-m-d H:i:s",$time);
$result = DB::table('hms_birth')->where('birth_id',$birth_id)->update($data);
     //Set Message
        \Session::flash('message','update Data sucessfully');
     return redirect()->route('birthlist');
    }
    public function birthview($birth_id){
    $result = DB::table('hms_birth')->where('birth_id',$birth_id)->first();
    return view('admin.pages.birthview')->with('result',$result);
    }


   public function birthdelete($birth_id)
   {
    $birthlist = DB::table('hms_birth')->where('birth_id',$birth_id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('birthlist');
    }


// Death
    public function deathadd(){
        $data=array();
        $data['dr_list']=DB::table('doctor')->get();
         $data['patient_list']=DB::table('patient')->get();
    	return view('admin.pages.deathadd',$data);
    }
    public function deathlist(){
        $user_role = Session::get('user_role');
        if($user_role == 'patient'){
            $deathlist = DB::table('hms_death')
                ->join('patient','hms_death.patient_id','=','patient.patient_code')
                ->where('user_id',Auth::id())
                ->get();
        }else{
            $deathlist = DB::table('hms_death')->get();
        }

    	return view('admin.pages.deathlist',compact('deathlist'));
    }
    public function deathedit($death_id){
    $death_edit = DB::table('hms_death')->where('death_id',$death_id)->first();
    return view('admin.pages.deathedit',compact('death_edit'));
    }

    public function deathinsert(Request $request){
    	$data=array();
    	$time=time();
    	$data['death_id']=$request->death_id;
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['patient_id']=$request->patient_id;
    	$data['doctor_id']=$request->doctor_id;
    	$data['date']=$request->date;
    	$data['status']=$request->status;

    	 $result = DB::table('hms_death')->insert($data);
     //Set Message
        \Session::flash('message','Insert Data sucessfully');
     return redirect()->route('deathadd');

    }
    public function front_deathinsert(Request $request){
    	$data=array();
    	$time=time();
    	$data['death_id']=$request->birth_id;
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['patient_id']=$request->patient_id;
    	$data['doctor_id']=$request->doctor_id;
    	$data['date']=$request->date;
    	$data['status']=$request->status;
    	$data['created_at']=date("Y-m-d H:i:s",$time);
    	$result = DB::table('hms_death')->insert($data);
     //Set Message
           \Session::flash('message','your death Certificate request are recived sucessfully....Wait few minute For a confiramtion sms in your phone number');
     return redirect()->route('front_death');
     }


    public function deathupdate(Request $request, $death_id){
   		$data=array();
    	$time=time();
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['patient_id']=$request->patient_id;
    	$data['doctor_id']=$request->doctor_id;
    	$data['date']=$request->date;
    	$data['status']=$request->status;
    	$data['created_at']=date("Y-m-d H:i:s",$time);
$result = DB::table('hms_death')->where('death_id',$death_id)->update($data);
     //Set Message
      \Session::flash('message','update Data sucessfully');
     return redirect()->route('deathlist');
    }

    public function deathview($death_id){
    $result = DB::table('hms_death')->where('death_id',$death_id)->first();
    return view('admin.pages.deathview')->with('result',$result);
    }

  public function deathdelete($death_id)
   {
   $deathlist = DB::table('hms_death')->where('death_id',$death_id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('deathlist');
    }

    // Operation
    public function operationadd(){
           $data=array();
           $data['dr_list']=DB::table('doctor')->get();
            $data['patient_list']=DB::table('patient')->get();
    	   return view('admin.pages.operationadd',$data);
    }
    public function operationlist(){
        $user_role = Session::get('user_role');
        if($user_role == 'patient'){
            $operationlist = DB::table('hms_operation')
                ->join('patient','hms_operation.patient_id','=','patient.patient_code')
                ->where('user_id',Auth::id())
                ->get();
        }else{
            $operationlist = DB::table('hms_operation')->get();
        }

    	return view('admin.pages.operationlist',compact('operationlist'));
    }
    public function operationedit($oper_id){
    $operation_edit = DB::table('hms_operation')->where('oper_id',$oper_id)->first();
    return view('admin.pages.operationedit',compact('operation_edit'));
    }

    public function operationinsert(Request $request){
    	$data=array();
    	$time=time();
    	$data['oper_id']=$request->oper_id;
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['patient_id']=$request->patient_id;
    	$data['doctor_id']=$request->doctor_id;
    	$data['date']=$request->date;
    	$data['status']=$request->status;

    	 $result = DB::table('hms_operation')->insert($data);
     //Set Message
        \Session::flash('message','Insert Data sucessfully');
     return redirect()->route('operationadd');

    }
    public function operationupdate(Request $request, $oper_id){
   		$data=array();
    	$time=time();
    	$data['title']=$request->title;
    	$data['description']=$request->description;
    	$data['patient_id']=$request->patient_id;
    	$data['doctor_id']=$request->doctor_id;
    	$data['date']=$request->date;
    	$data['status']=$request->status;
    	$data['created_at']=date("Y-m-d H:i:s",$time);
$result = DB::table('hms_operation')->where('oper_id',$oper_id)->update($data);
     //Set Message
      \Session::flash('message','update Data sucessfully');
     return redirect()->route('operationlist');
    }

    public function operationview($oper_id){
    $result = DB::table('hms_operation')->where('oper_id',$oper_id)->first();
    return view('admin.pages.operationview')->with('result',$result);
    }

  public function operationdelete($oper_id)
   {
   $operationlist = DB::table('hms_operation')->where('oper_id',$oper_id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('operationlist');
    }
}
