<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;


class MedicineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    private $table = 'medicine';
    public function medicineadd(){
      $data=array();
      $data['categorylist'] = DB::table('hms_medicine_genetic')->get();

      return view('admin.pages.medicineadd',$data);
    }
    public function medicinelist(){
      $medicinelist = DB::table($this->table)->get();
    return view('admin.pages.medicinelist',compact('medicinelist'));
    }
    public function medicineinsert(Request $request)
      {
          $data = array();
          $time = time();
          $data['name'] = $request->name;
          $data['category'] = $request->category;
          $data['description'] = $request->description;
          $data['price'] = $request->price;
          $data['manufacture'] = $request->manufacture;
          $data['status'] = $request->status;
          $data['created_at'] = date("Y-m-d H:i:s",$time);
          $result = DB::table('medicine')->insert($data);
          return redirect()->route('medicinelist');
      }
      public function medicineedit($id){
        $medicine = DB::table($this->table)->where('id',$id)->first();
        return view('admin.pages.medicineedit',compact('medicine'));
      }
      public function medicineupdate(Request $request, $id)
      {
        $data= array();
        $time = time();
        $data['name']=$request->name;
        $data['category']=$request->category;
        $data['description']=$request->description;
        $data['price']=$request->price;
        $data['manufacture']=$request->manufacture;
        $data['status']=$request->status;
        $data['created_at']=date("Y-m-d H:i:s",$time);
        $result = DB::table('medicine')->where('id',$id)->update($data);
        return redirect()->route('medicinelist');
      }
      public function medicinedelete($id)
      {
        $medicinelist = DB::table('medicine')->where('id',$id)->delete();
        //Set Message
           \Session::flash('message','Delete sucessfuly');
        return redirect()->route('medicinelist');
      }

  public function invoiceadd(){
    $data=array();
    $data['m_list']=DB::table('medicine')->selectRaw('name,concat(id,",",price) as price')->get();
    $data['patient_code'] = DB::table('patient')->get();
  return view('admin.pages.invoiceadd',$data);
}
  public function invoicelist(){

      $user_role = Session::get('user_role');

      if($user_role == 'patient'){
          $invoicelist = DB::table('m_invoice')
              ->select('m_invoice.*')
              ->join('patient','m_invoice.patient_id','=','patient.patient_code')
              ->where('user_id',Auth::id())
              ->get();

      }else{
          $invoicelist = DB::table('m_invoice')->get();
      }

return view('admin.pages.invoicelist',compact('invoicelist'));
}


  public function invoiceinsert(Request $request){


    /*$data['medicine_id'] = $request->medicine_id;
    $data['quantity'] = $request->quantity;
    $data['status'] = $request->status;
    $data['created_at']=date("Y-m-d H:i:s",$time);
    $inv_id = DB::table('invoice_medicine')->insertGetId($data);
 */
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

    $inv_id = DB::table('m_invoice')->insertGetId($data);

    $medicine_id = $request->medicine_id;
    $price = $request->price;
    $quantity = $request->quantity;
    $medicine_arr = array();
    if(!empty($medicine_id)){
      foreach ($medicine_id as $key => $id) {
        $medicine_arr[] = array(
            'inv_id' => $inv_id,
            'medicine_id' => $id,
            'quantity' => $quantity[$key],
            'price' => $price[$key],
            'total_price' => $price[$key]*$quantity[$key],

        );
      }
     DB::table('inv_medicine')->insert($medicine_arr);
    }
   return redirect()->route('invoicelist');
}
public function invoiceedit($id){
  $data['patient_code'] = DB::table('patient')->get();
  $data['patient_info']=DB::table('m_invoice')->where('id',$id)->first();
   $data['m_list']=DB::table('medicine')->selectRaw('name,concat(id,",",price) as price')->get();
  $data['medicine_info'] = DB::table('inv_medicine')
              ->join('medicine','medicine.id','=','inv_medicine.medicine_id')
              ->where('inv_medicine.inv_id',$id)
              ->get();
  return view('admin.pages.invoiceedit',$data);
}
public function invoiceview($id){

   $data['patient_info'] = DB::table('m_invoice')
            ->join('patient','patient.patient_code','=','m_invoice.patient_id')
            ->where('m_invoice.id', $id)
            ->first();

             $data['medicine_info'] = DB::table('inv_medicine')
              ->join('medicine','medicine.id','=','inv_medicine.medicine_id')
              ->where('inv_medicine.inv_id',$id)
              ->get();

  $data['invoice_view']=DB::table('m_invoice')->where('id',$id)->get();

  return view('admin.pages.invoiceview',$data);
}

public function invoiceupdate(Request $request,$id){
$time = time();


    $data['patient_id']=$request->patient_id;
    $data['total'] = $request->total;
    $data['vat'] = $request->vat;
    $data['discount'] = $request->discount;
    $data['grand_total'] = $request->grand_total;
    $data['paid'] = $request->paid;
    $data['due'] = $request->due;
    $data['status'] = $request->status;
    $data['created_at']=date("Y-m-d H:i:s",$time);

    DB::table('m_invoice')->where('id',$id)->update($data);

    $medicine_id = $request->medicine_id;
    $price = $request->price;
    $quantity = $request->quantity;
    $medicine_arr = array();
    if(!empty($medicine_id)){
      foreach ($medicine_id as $key => $id) {
        $medicine_arr[] = array(
            'inv_id' => $id,
            'medicine_id' => $id,
            'quantity' => $quantity[$key],
            'price' => $price[$key],
            'total_price' => $price[$key]*$quantity[$key],

        );
      }
      DB::table('inv_medicine')->where('inv_id',$inv_id)->delete();
     DB::table('inv_medicine')->insert($medicine_arr);
    }
   return redirect()->route('invoicelist');
}

public function invoicedelete($id){
  $invoicedel= DB::table('m_invoice')->where('id',$id)->delete();
  //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('invoicelist');
}

 public function medicine_geneticadd(){
  return view('admin.pages.medicine_geneticadd');
 }
 public function medicine_geneticinsert(Request $request){
    $data = array();
    $time = time();
    $data['name'] = $request->name;
    $data['description'] = $request->description;
    $data['status'] = $request->status;
    $data['created_at'] = date("Y-m-d H:i:s",$time);
    $result = DB::table("hms_medicine_genetic")->insert($data);
    //Set Message
    \Session::flash('message','Insert sucessfully');
     return redirect()->route('medicine_geneticlist');

   }
    public function medicine_geneticlist(){
  $medicine_geneticlist = DB::table('hms_medicine_genetic')->get();
  return view('admin.pages.medicine_geneticlist',compact('medicine_geneticlist'));

   }
   public function medicine_geneticedit($id){
  $genetic = DB::table('hms_medicine_genetic')->where('id',$id)->first();
  return view('admin.pages.medicine_geneticedit',compact('genetic'));
   }
    public function medicine_geneticview($id){
    $genetic_view = DB::table('hms_medicine_genetic')->where('id',$id)->first();
    return view('admin.pages.medicine_geneticview',compact('genetic_view'));
  }
  public function medicine_geneticupdate(Request $request,$id){
        $data= array();
        $time = time();
        $data['name']=$request->name;
        $data['description']=$request->description;
        $data['status']=$request->status;
        $data['created_at']=date("Y-m-d H:i:s",$time);
        $result = DB::table('hms_medicine_genetic')->where('id',$id)->update($data);
        return redirect()->route('medicine_geneticlist');
  }

   public function medicine_geneticdelete($id)
  {
  $medicine_geneticlist = DB::table('hms_medicine_genetic')->where('id',$id)->delete();
    //Set Message
       \Session::flash('message','Delete sucessfuly');
    return redirect()->route('medicine_geneticlist');
  }
}
