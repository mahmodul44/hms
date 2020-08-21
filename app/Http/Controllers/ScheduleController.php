<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ScheduleController extends Controller
{
    private $table = 'schedules';
    public function scheduleadd(){
      $data=array();
      $data['dr_list']=DB::table('doctor')->get();
    return view('admin.pages.scheduleadd',$data);
    }
    public function schedulelist(){
      $schedulelist = DB::table($this->table)->get();
      return view('admin.pages.schedulelist',compact('schedulelist'));
    }
    public function scheduleedit($id)
    {
      $schedule = DB::table($this->table)->where('id',$id)->first();
      return view('admin.pages.scheduleedit', compact('schedule'));
    }
    public function scheduleinsert(Request $request){
      $data= array();
      $time = time();
      $data['dname']=$request->dname;
      $data['day']=$request->day;
      $data['stime']=$request->stime;
      $data['etime']=$request->etime;
      $data['ptime']=$request->ptime;
      $data['svisibility']=$request->svisibility;
      $data['status']=$request->status;
      $data['created_at']=date("Y-m-d H:i:s",$time);
      $result = DB::table($this->table)->insert($data);
      return redirect()->route('schedulelist');
    }
    public function scheduledelete($id)
    {
      $schedulelist = DB::table('schedules')->where('id',$id)->delete();
      //Set Message
         \Session::flash('message','Delete sucessfuly');
      return redirect()->route('schedulelist');
    }
    public function scheduleupdate(Request $request, $id)
    {
      $data= array();
      $time = time();
      $data['dname'] = $request->dname;
      $data['day'] = $request->day;
      $data['stime'] = $request->stime;
      $data['etime'] = $request->etime;
      $data['ptime'] = $request->ptime;
      $data['svisibility'] = $request->svisibility;
      $data['status'] = $request->status;
      $data['created_at'] = date("Y-m-d H:i:s",$time);
      $result = DB::table('schedules')->where('id',$id)->update($data);
      return redirect()->route('schedulelist');
    }
}
