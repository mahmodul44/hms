<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HummanController extends Controller
{
  private $table = 'employee';
  public function employeeadd(){
   return view('admin.pages.employeeadd');
 }
 /*
 public function employeelist()
 {
     $employeelist = DB::table($this->table)->get();
     return view('admin.pages.employeelist',compact('employeelist'));
 }
*/
 public function employeeedit($id)
 {
     $employee = DB::table('employee')->where('id',$id)->first();
     return view('admin.pages.employeeedit',compact('employee'));
 }
//employee insert delete update
 public function employeeinsert(Request $request)
 {
     $data = array();
     $time = time();
     $data['user_role']=$request->user_role;
     $data['emp_name']=$request->emp_name;
     $data['emp_email']=$request->emp_email;
     $data['emp_password']=$request->emp_password;
     $data['emp_mobile']=$request->emp_mobile;
     $data['emp_gender']=$request->emp_gender;
     $data['emp_address']=$request->emp_address;
     $data['emp_status']=$request->emp_status;
     $emp_image = $request->file('emp_image');
     $data['created_at']=date("Y-m-d H:i:s",$time);

     if($emp_image){
           $image_filename = $emp_image->getClientOriginalName();
           $emp_image->move(public_path('images/employee'), $image_filename);
           $data['emp_image']=$image_filename;
       }
       else{
           $image_filename="noimage.jpg";
       }

     $result = DB::table('employee')->insert($data);
     //Set Message
        \Session::flash('message','Insert sucessfully');
     return redirect()->route('employeeadd');
 }
 public function accountantlist()
 {
   $accountantlist = DB::table($this->table)->where('user_role',1)->get();
   return view('admin.pages.accountantlist',compact('accountantlist'));

 }
 public function laboratoristlist()
 {
   $laboratoristlist = DB::table($this->table)->where('user_role',2)->get();
   return view('admin.pages.laboratoristlist',compact('laboratoristlist'));

 }
 public function nurselist()
 {
   $nurselist = DB::table($this->table)->where('user_role',3)->get();
   return view('admin.pages.nurselist',compact('nurselist'));

 }
 public function pharmacylist()
 {
   $pharmacylist = DB::table($this->table)->where('user_role',4)->get();
   return view('admin.pages.pharmacylist',compact('pharmacylist'));

 }
 public function receptionistlist()
 {
   $receptionistlist = DB::table($this->table)->where('user_role',5)->get();
   return view('admin.pages.receptionistlist',compact('receptionistlist'));

 }
public function case_managerlist()
 {
   $case_managerlist = DB::table($this->table)->where('user_role',6)->get();
   return view('admin.pages.case_managerlist',compact('case_managerlist'));

 }
   public function nurseview($id){
    $result = DB::table($this->table)->where('id',$id)->first();
    return view('admin.pages.nurseview')->with('result',$result);
  }

  public function nurseedit($id)
  {
      $nurse = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.nurseedit',compact('nurse'));
  }

  public function nurseupdate(Request $request,$id)
  {
    $data= array();
    $time = time();
    $data['user_role']=$request->user_role;
    $data['emp_name']=$request->emp_name;
    $data['emp_email']=$request->emp_email;
    $data['emp_password']=$request->emp_password;
    $data['emp_mobile']=$request->emp_mobile;
    $data['emp_gender']=$request->emp_gender;
    $data['emp_address']=$request->emp_address;
    $data['emp_status']=$request->emp_status;
    $emp_image =$request->file('emp_image');
    $data['created_at']=date("Y-m-d H:i:s",$time);

    if($emp_image){
          $image_filename = $emp_image->getClientOriginalName();
          $emp_image->move(public_path('images/employee'), $image_filename);
          $data['emp_image']=$image_filename;
      }
      else{
          $image_filename="noimage.jpg";
      }

    $nurse = DB::table($this->table)->where('id',$id)->update($data);
    
    return redirect()->route('nurselist');
  }


    public function nursedelete($id)
  {
    $nurselist = DB::table($this->table)->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfully');
    return redirect()->route('nurselist');
  }

//accountantview
  public function accountantview($id){
    $result = DB::table($this->table)->where('id',$id)->first();
    return view('admin.pages.accountantview')->with('result',$result);
  }

  public function accountantedit($id)
  {
      $account = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.accountantedit',compact('account'));
  }

  public function accountantupdate(Request $request,$id)
  {
    $data= array();
    $time = time();
    $data['user_role']=$request->user_role;
    $data['emp_name']=$request->emp_name;
    $data['emp_email']=$request->emp_email;
    $data['emp_password']=$request->emp_password;
    $data['emp_mobile']=$request->emp_mobile;
    $data['emp_gender']=$request->emp_gender;
    $data['emp_address']=$request->emp_address;
    $data['emp_status']=$request->emp_status;
    $emp_image =$request->file('emp_image');
    $data['created_at']=date("Y-m-d H:i:s",$time);

    if($emp_image){
          $image_filename = $emp_image->getClientOriginalName();
          $emp_image->move(public_path('images/employee'), $image_filename);
          $data['emp_image']=$image_filename;
      }
      else{
          $image_filename="noimage.jpg";
      }

    $nurse = DB::table($this->table)->where('id',$id)->update($data);
    //$result = DB::table('doctor')->insert($data['image_filename']);
    return redirect()->route('accountantlist');
  }


    public function accountantdelete($id)
  {
    $accountantlist = DB::table($this->table)->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('accountantlist');
  }

//laboratorist
    public function laboratoristview($id){
    $result = DB::table($this->table)->where('id',$id)->first();
    return view('admin.pages.laboratoristview')->with('result',$result);
  }

  public function laboratoristedit($id)
  {
      $laboratory = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.laboratoristedit',compact('laboratory'));
  }

  public function laboratoristupdate(Request $request,$id)
  {
    $data= array();
    $time = time();
    $data['user_role']=$request->user_role;
    $data['emp_name']=$request->emp_name;
    $data['emp_email']=$request->emp_email;
    $data['emp_password']=$request->emp_password;
    $data['emp_mobile']=$request->emp_mobile;
    $data['emp_gender']=$request->emp_gender;
    $data['emp_address']=$request->emp_address;
    $data['emp_status']=$request->emp_status;
    $emp_image =$request->file('emp_image');
    $data['created_at']=date("Y-m-d H:i:s",$time);

    if($emp_image){
          $image_filename = $emp_image->getClientOriginalName();
          $emp_image->move(public_path('images/employee'), $image_filename);
          $data['emp_image']=$image_filename;
      }
      else{
          $image_filename="noimage.jpg";
      }

    $laboratory = DB::table($this->table)->where('id',$id)->update($data);
    //$result = DB::table('doctor')->insert($data['image_filename']);
    return redirect()->route('laboratoristlist');
  }


    public function laboratoristdelete($id)
  {
    $laboratoristlist = DB::table($this->table)->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('laboratoristlist');
  }

//pharmacy
    public function pharmacyview($id){
    $result = DB::table($this->table)->where('id',$id)->first();
    return view('admin.pages.pharmacyview')->with('result',$result);
  }

  public function pharmacyedit($id)
  {
      $pharmacy = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.pharmacyedit',compact('pharmacy'));
  }

  public function pharmacyupdate(Request $request,$id)
  {
    $data= array();
    $time = time();
    $data['user_role']=$request->user_role;
    $data['emp_name']=$request->emp_name;
    $data['emp_email']=$request->emp_email;
    $data['emp_password']=$request->emp_password;
    $data['emp_mobile']=$request->emp_mobile;
    $data['emp_gender']=$request->emp_gender;
    $data['emp_address']=$request->emp_address;
    $data['emp_status']=$request->emp_status;
    $emp_image =$request->file('emp_image');
    $data['created_at']=date("Y-m-d H:i:s",$time);

    if($emp_image){
          $image_filename = $emp_image->getClientOriginalName();
          $emp_image->move(public_path('images/employee'), $image_filename);
          $data['emp_image']=$image_filename;
      }
      else{
          $image_filename="noimage.jpg";
      }

    $laboratory = DB::table($this->table)->where('id',$id)->update($data);
    //$result = DB::table('doctor')->insert($data['image_filename']);
    return redirect()->route('pharmacylist');
  }


    public function pharmacydelete($id)
  {
    $pharmacylist = DB::table($this->table)->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('pharmacylist');

  }

  //Receptionist
    public function receptionistview($id){
    $result = DB::table($this->table)->where('id',$id)->first();
    return view('admin.pages.receptionistview')->with('result',$result);
  }

  public function receptionistedit($id)
  {
      $receptionist = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.receptionistedit',compact('receptionist'));
  }

  public function receptionistupdate(Request $request,$id)
  {
    $data= array();
    $time = time();
    $data['user_role']=$request->user_role;
    $data['emp_name']=$request->emp_name;
    $data['emp_email']=$request->emp_email;
    $data['emp_password']=$request->emp_password;
    $data['emp_mobile']=$request->emp_mobile;
    $data['emp_gender']=$request->emp_gender;
    $data['emp_address']=$request->emp_address;
    $data['emp_status']=$request->emp_status;
    $emp_image =$request->file('emp_image');
    $data['created_at']=date("Y-m-d H:i:s",$time);

    if($emp_image){
          $image_filename = $emp_image->getClientOriginalName();
          $emp_image->move(public_path('images/employee'), $image_filename);
          $data['emp_image']=$image_filename;
      }
      else{
          $image_filename="noimage.jpg";
      }

    $reception = DB::table($this->table)->where('id',$id)->update($data);
    //$result = DB::table('doctor')->insert($data['image_filename']);
    return redirect()->route('receptionistlist');
  }


    public function receptionistdelete($id)
  {
    $receptionistlist = DB::table($this->table)->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('receptionistlist');
  }

//Case manager
    public function case_managerview($id){
    $result = DB::table($this->table)->where('id',$id)->first();
    return view('admin.pages.case_managerview')->with('result',$result);
  }

  public function case_manageredit($id)
  {
      $case_manager = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.case_manageredit',compact('case_manager'));
  }

  public function case_managerupdate(Request $request,$id)
  {
    $data= array();
    $time = time();
    $data['user_role']=$request->user_role;
    $data['emp_name']=$request->emp_name;
    $data['emp_email']=$request->emp_email;
    $data['emp_password']=$request->emp_password;
    $data['emp_mobile']=$request->emp_mobile;
    $data['emp_gender']=$request->emp_gender;
    $data['emp_address']=$request->emp_address;
    $data['emp_status']=$request->emp_status;
    $emp_image =$request->file('emp_image');
    $data['created_at']=date("Y-m-d H:i:s",$time);

    if($emp_image){
          $image_filename = $emp_image->getClientOriginalName();
          $emp_image->move(public_path('images/employee'), $image_filename);
          $data['emp_image']=$image_filename;
      }
      else{
          $image_filename="noimage.jpg";
      }

    $case_manager = DB::table($this->table)->where('id',$id)->update($data);
    
    return redirect()->route('case_managerlist');
  }


    public function case_managerdelete($id)
  {
    $case_managerlist = DB::table($this->table)->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('case_managerlist');
  }


}




