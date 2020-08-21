<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
use Auth;
use Illuminate\Support\Facades\Session;
use DateInterval;

class BedController extends Controller
{
   public function bedadd(){
   	return view('admin.pages.bedadd');
   }
   public function bedlist(){
   	$bedlist = DB::table('hm_bed')->get();
   	return view('admin.pages.bedlist',compact('bedlist'));
   }
   public function bedinsert(Request $request){
   	$data = array();
    $time = time();
    $data['bed_type'] = $request->bed_type;
    $data['description'] = $request->description;
    $data['limit'] = $request->limit;
    $data['charge'] = $request->charge;
    $data['status'] = $request->status;
    $data['created_at'] = date("Y-m-d H:i:s",$time);
    $result = DB::table('hm_bed')->insert($data);
    return redirect()->route('bedlist');
   }

   public function bededit($id){
      $bed_edit = DB::table('hm_bed')->where('id',$id)->first();
      return view('admin.pages.bededit',compact('bed_edit'));
   }
   public function bedupdate(Request $request, $id){
    $data = array();
    $time = time();
    $data['bed_type'] = $request->bed_type;
    $data['description'] = $request->description;
    $data['limit'] = $request->limit;
    $data['charge'] = $request->charge;
    $data['created_at'] = date("Y-m-d H:i:s",$time);
    $bed_edit = DB::table('hm_bed')->where('id',$id)->update($data);
    return redirect()->route('bedlist');
   }
   public function beddelete($id){
     $beddel = DB::table('hm_bed')->where('id',$id)->delete();
    //Set Message
       \Session::flash('message',' Bed Delete sucessfully');
    return redirect()->route('bedlist');
   }


   public function bedassignadd(){
    $data['patient_id']=DB::table('patient')->get();
    $data['bed_typelist']=DB::table('hm_bed')->get();
   	return view('admin.pages.bedassignadd',$data);
   }
   public function bedassignedit($id){
    $data['patient_id']=DB::table('patient')->get();
    $data['bed_typelist']=DB::table('hm_bed')->get();
    $data['bed_assignedit'] = DB::table('bed_assign')->where('id',$id)->first();
    return view('admin.pages.bedassignedit',$data);
   }

   public function bedassigninsert(Request $request){
   $bed_type=$request->bed_type;
   $assign_date=$request->assign_date;
   $discharge_date=$request->discharge_date;
   $datetime1=new DateTime($assign_date);
   $datetime2=new DateTime($discharge_date);
   $interval=$datetime1->diff($datetime2);
   $days = $interval->format('%d');
   $price = $bed_type*$days;

    $data = array();
    $time = time();
    $data['price']=$bed_type*$days;
    $data['assign_date']= $request->assign_date;
    $data['discharge_date'] = $request->discharge_date;
    $data['patient_id'] = $request->patient_id;
    $data['description'] = $request->description;
    $data['status'] = $request->status;
    $data['created_at'] = date("Y-m-d H:i:s",$time);
    $data['assign_by'] =Auth::user()->name;
    $result = DB::table('bed_assign')->insert($data);

    /*  $data['bed_type']=$request->bed_type;
     $data['assign_date']= $request->assign_date;
    $data['discharge_date'] = $request->discharge_date;
   $data['datetime1']= new DateTime($data['assign_date']);
   $data['datetime2'] = new DateTime($data['discharge_date']);

   $data['interval'] = $data['datetime1']->diff($data['datetime2']);
   $data['days'] = $data['interval']->format('Y-m-d | H:i:s');

   $data['price'] = $data['bed_type']*$data['days'];
   $data['patient_id'] = $request->patient_id;

    $data['description'] = $request->description;
    $data['status'] = $request->status;
    $data['created_at'] = date("Y-m-d H:i:s",$time);
    $data['assign_by'] =Auth::user()->name;
    $result = DB::table('bed_assign')->insert($data);*/
    return redirect()->route('bedassignlist');
   }
   public function bedassignlist(){
       $user_role = Session::get('user_role');
       if($user_role == 'patient'){
           $assignlist = DB::table('bed_assign')
               ->join('patient','bed_assign.patient_id','=','patient.patient_code')
               ->where('user_id',Auth::id())
               ->get();

       }else{
           $assignlist = DB::table('bed_assign')->get();
       }


   	return view('admin.pages.bedassignlist',compact('assignlist'));
   }
   public function bedassigndelete($id){
    $assign_del = DB::table('bed_assign')->where('id',$id)->delete();
    return redirect()->route('bedassignlist');
   }
   public function bedassignupdate(Request $request,$id){
    $data = array();
    $time = time();
    $data['patient_id'] = $request->patient_id;
    $data['description'] = $request->description;
    $data['discharge_date'] = $request->discharge_date;
    $data['assign_date'] = $request->assign_date;
    $data['status'] = $request->status;
    $data['created_at'] = date("Y-m-d H:i:s",$time);
    $result = DB::table('bed_assign')->where('id',$id)->update($data);
    return redirect()->route('bedassignlist');
   }
}
