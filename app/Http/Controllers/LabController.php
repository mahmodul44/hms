<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;

class LabController extends Controller
{
  public function testadd(){
  $data=array();
  $data['categorylist'] = DB::table('lab_category')->get();
  return view('admin.pages.testadd',$data);
  }
  public function testlist(){
    $testlist = DB::table('lab_test')->get();
  return view('admin.pages.testlist',compact('testlist'));
  }
  public function testinsert(Request $request){
    $data = array();
    $time = time();
    $data['cat_name'] = $request->cat_name;
    $data['test_name'] = $request->test_name;
    $data['test_rate'] = $request->test_rate;
    $data['test_ref_fee'] = $request->test_ref_fee;
    $data['test_description'] = $request->test_description;
    $data['created_at'] = date("Y-m-d H:i:s",$time);
    $result = DB::table('lab_test')->insert($data);
     return redirect()->route('testlist');
  }

  public function testedit($id){
    $test = DB::table('lab_test')->where('id',$id)->first();
    return view('admin.pages.testedit',compact('test'));
  }
  public function testupdate(Request $request, $id)
  {
    $data= array();
    $time = time();
    $data['cat_name'] = $request->cat_name;
    $data['test_name'] = $request->test_name;
    $data['test_rate'] = $request->test_rate;
    $data['test_ref_fee'] = $request->test_ref_fee;
    $data['test_description'] = $request->test_description;
    $data['created_at']=date("Y-m-d H:i:s",$time);
    $result = DB::table('lab_test')->where('id',$id)->update($data);
    return redirect()->route('testlist');
  }
  public function testdelete($id)
  {
    $testlist = DB::table('lab_test')->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('testlist');
  }


  //category
  public function categoryadd(){
  return view('admin.pages.categoryadd');
  }
  public function categorylist(){
  $categorylist= DB::table('lab_category')->get();
  return view('admin.pages.categorylist',compact('categorylist'));
  }
  public function categoryinsert(Request $request){
    $data = array();
    $time = time();
    $data['cat_name'] = $request->cat_name;
    $data['lab_type'] = $request->lab_type;
    $data['cat_description'] = $request->cat_description;
    $data['status'] = $request->status;
    $data['created_at'] = date("Y-m-d H:i:s",$time);
    $result = DB::table('lab_category')->insert($data);
    return redirect()->route('categorylist');
  }
  public function categoryedit($id){
    $category = DB::table('lab_category')->where('id',$id)->first();
    return view('admin.pages.categoryedit',compact('category'));
  }
  public function categoryupdate(Request $request, $id)
  {
    $data= array();
    $time = time();
    $data['cat_name'] = $request->cat_name;
    $data['lab_type'] = $request->lab_type;
    $data['cat_description'] = $request->cat_description;
    $data['status'] = $request->status;
    $data['created_at'] = date("Y-m-d H:i:s",$time);
    $result = DB::table('lab_category')->where('id',$id)->update($data);
    return redirect()->route('categorylist');
  }
  public function categorydelete($id)
  {
    $categorylist = DB::table('lab_category')->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('categorylist');
  }
    public function lab_invoiceadd(){
        $data=array();
        $data['test_list']=DB::table('lab_test')->selectRaw('test_name,concat(id,",",test_rate) as test_rate')->get();
        $data['patient_code'] = DB::table('patient')->get();
        return view('admin.pages.lab_invoiceadd',$data);
    }
    public function lab_invoicelist(){
        $user_role = Session::get('user_role');
        if($user_role == 'patient'){
            $invoicelist = DB::table('test_lab_invoice')
                ->select('test_lab_invoice.*')
                ->join('patient','test_lab_invoice.patient_id','=','patient.patient_code')
                ->where('user_id',Auth::id())
                ->get();

        }else{
            $invoicelist = DB::table('test_lab_invoice')->get();
        }

        return view('admin.pages.lab_invoicelist',compact('invoicelist'));
    }


    public function lab_invoiceinsert(Request $request){

        $time = time();

        $data['id']=$request->inv_m_id;
        $data['patient_id']=$request->patient_id;
        $data['total'] = $request->total;
        $data['vat'] = $request->vat;
        $data['discount'] = $request->discount;
        $data['grand_total'] = $request->grand_total;
        $data['paid'] = $request->paid;
        $data['due'] = $request->due;
        $data['status'] = $request->status;
        $data['created_at']=date("Y-m-d H:i:s",$time);

        $lab_id = DB::table('test_lab_invoice')->insertGetId($data);

        $test_id = $request->test_id;
        $test_rate = $request->test_rate;
        $quantity = $request->quantity;
        $test_arr = array();
        if(!empty($test_id)){
            foreach ($test_id as $key => $id) {
                $test_arr[] = array(
                    'lab_id' => $lab_id,
                    'test_id' => $id,
                    'quantity' => $quantity[$key],
                    'test_rate' => $test_rate[$key],
                    'total_price' => $test_rate[$key]*$quantity[$key],
                );
            }
            DB::table('lab_invoice')->insert($test_arr);
        }
        return redirect()->route('lab_invoicelist');
    }
    public function lab_invoicedelete($id){
      $lab_invoicedelete=DB::table('test_lab_invoice')->where('id',$id)->delete();
      //Set Message
       \Session::flash('message','Delete sucessfuly');
      return redirect()->route('lab_invoicelist');
    }
    public function lab_invoiceview($id){
       $data['patient_info'] = DB::table('test_lab_invoice')
            ->join('patient','patient.patient_code','=','test_lab_invoice.patient_id')
            ->where('test_lab_invoice.id', $id)
            ->first();

      $data['test_info'] = DB::table('lab_invoice')
              ->join('lab_test','lab_test.id','=','lab_invoice.test_id')
              ->where('lab_invoice.lab_id',$id)
              ->get();



    $data['lab_invoiceview'] = DB::table('test_lab_invoice')->where('id',$id)->get();

    return view('admin.pages.lab_invoiceview',$data);

  }
  public function lab_invoiceedit($id){

        $data['test_list']=DB::table('lab_test')->selectRaw('test_name,concat(id,",",test_rate) as test_rate')->get();

        /*$data['test_inv']=DB::table(' lab_invoice')->first();*/

  $data['patient_info']=DB::table('test_lab_invoice')->where('id',$id)->first();

      $data['test_info'] = DB::table('lab_invoice')
          ->join('lab_test','lab_test.id','=','lab_invoice.test_id')
          ->where('lab_invoice.lab_id',$id)
          ->get();

        return view('admin.pages.lab_invoiceedit',$data);
  }

}
