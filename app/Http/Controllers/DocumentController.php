<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DocumentController extends Controller
{
    private $table = 'document';
    public function documentadd(){
      $data=array();
      $data['patient_code']=DB::table('patient')->where('type',1)->get();
      $data['dname']= DB::table('doctor')->get();
      return view('admin.pages.documentadd',$data);
    }
    public function documentlist(){
      $documentlist = DB::table($this->table)->get();
      return view('admin.pages.documentlist',compact('documentlist'));
    }
    public function documentinsert(Request $request){
      $data = array();
      $time = time();
      $data['patient_code'] = $request->patient_code;
      $data['doctor'] = $request->doctor;
      $data['snote'] = $request->snote;
      $data['date'] = $request->date;
      $document = $request->file('document');
      $data['created_at'] = date("Y-m-d H:i:s",$time);
      if($document){
        $document_filename = $document->getClientOriginalName();
        $document->move(public_path('images/document'), $document_filename);
        $data['document'] = $document_filename;
      }
      else{
          $document_filename = 'no document';
      }
      $result = DB::table('document')->insert($data);
      return redirect()->route('documentlist');
    }
    public function documentupdate(Request $request,$id){
      $data = array();
      $time = time();
      $data['patient_code'] = $request->patient_code;
      $data['doctor'] = $request->doctor;
      $data['snote'] = $request->snote;
      $data['date'] = $request->date;
      $document = $request->file('document');
      $data['created_at'] = date("Y-m-d H:i:s",$time);
      if($document){
        $document_filename = $document->getClientOriginalName();
        $document->move(public_path('images/document'), $document_filename);
        $data['document'] = $document_filename;
      }
      else{
          $document_filename = 'no document';
      }
    
      $result = DB::table('document')->where('id',$id)->update($data);
      //Set Message
         \Session::flash('message','update sucessfuly');
      return redirect()->route('documentlist');
    }
    public function documentedit($id){
      $data['doctor']=DB::table('doctor')->get();
      $data['document_edit'] = DB::table('document')->where('id',$id)->first();
      return view('admin.pages.documentedit',$data);
    }
    public function documentdelete($id)
    {
      $documentlist = DB::table('document')->where('id',$id)->delete();
      //Set Message
         \Session::flash('message','Delete sucessfuly');
      return redirect()->route('documentlist');
    }

    //document for outdoor
    public function documentaddout(){
       $data=array();
       $data['patient_code']=DB::table('patient')->where('type',0)->get();
      $data['dname']= DB::table('doctor')->get();
      return view('admin.pages.documentaddout',$data);
    }
    public function documentlistout(){
      $documentlistout = DB::table($this->table)->get();
      return view('admin.pages.documentlistout',compact('documentlistout'));
    }
    public function documentinsertout(Request $request){
      $data = array();
      $time = time();
      $data['patient_code'] = $request->patient_code;
      $data['doctor'] = $request->doctor;
      $data['snote'] = $request->snote;
      $data['date'] = $request->date;
      $document = $request->file('document');
      $data['created_at'] = date("Y-m-d H:i:s",$time);
      if($document){
        $document_filename = $document->getClientOriginalName();
        $document->move(public_path('images/document'), $document_filename);
        $data['document'] = $document_filename;
      }
      else{
          $document_filename = 'no document';
      }
      $result = DB::table('document')->insert($data);
      return redirect()->route('documentlistout');
    }
    public function documentupdateout(Request $request,$id){
      $data = array();
      $time = time();
      $data['patient_code'] = $request->patient_code;
      $data['doctor'] = $request->doctor;
      $data['snote'] = $request->snote;
      $data['date'] = $request->date;
      $document = $request->file('document');
      $data['created_at']=date("Y-m-d H:i:s",$time);
      if($document){
        $document_filename = $document->getClientOriginalName();
        $document->move(public_path('images/document'), $document_filename);
        $data['document'] = $document_filename;
      }
      else{
          $document_filename = 'no document';
      }
      $result = DB::table('document')->where('id',$id)->update($data);
      //Set Message
         \Session::flash('message','update sucessfuly');
      return redirect()->route('documentlistout');
    }
    public function documenteditout($id){
       $data['doctor']=DB::table('doctor')->get();
      $data['document'] = DB::table('document')->where('id',$id)->first();
      return view('admin.pages.documenteditout',$data);
    }
    public function documentdeleteout($id)
    {
      $documentlistout = DB::table('document')->where('id',$id)->delete();
      //Set Message
         \Session::flash('message','Delete sucessfuly');
      return redirect()->route('documentlistout');
    }

}
