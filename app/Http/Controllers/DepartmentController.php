<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DepartmentController extends Controller
{
  private $table = 'department';
  public function departmentadd()
  {
      return view('admin.pages.departmentadd');
  }
  public function departmentlist()
  {
      $departmentlist = DB::table($this->table)->get();
      return view('admin.pages.departmentlist',compact('departmentlist'));
  }
  public function departmentedit($id)
  {
      $department = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.departmentedit', compact('department'));
  }

  //department insert update delete
  public function departmentinsert(Request $request){
    $data= array();
    $time = time();
    $data['deptname']= $request->deptname;
    $data['status']= $request->status;
    $data['description']= $request->description;
    $image = $request->file('image');
    $data['created_at']=date("Y-m-d H:i:s",$time);
    if($image){
            $image_filename = $image->getClientOriginalName();
            $image->move(public_path('images/department'), $image_filename);
            $data['image']=$image_filename;
        }
        else{
            $image_filename="noimage.jpg";
        }
    $result =DB::table('department')->insert($data);
    return redirect()->route('departmentlist');

  }

  public function departmentupdate(Request $request,$id)
  {
    $data = array();
    $time = time();
    $data['deptname'] = $request->deptname;
    $data['status'] = $request->status;
    $data['description'] = $request->description;
    $image = $request->file('image');
    $data['updated_at'] = date("Y-m-d H:i:s",$time);
    if($image){
      $image_filename = $image->getClientOriginalName();
     $image->move(public_path('images/department'), $image_filename);
          $data['image']=$image_filename;
      }
      else{
          $image_filename="noimage.jpg";
      }
    $result = DB::table('department')->where('id',$id)->update($data);
    //Set Message
       \Session::flash('message','Update sucessfuly');
    return redirect()->route('departmentlist');
  }

  public function departmentdelete($id){
    $departmentlist = DB::table('department')->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('departmentlist');
  }
}
