<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SliderController extends Controller
{
    public function slideradd(){
    	return view('admin.pages.slideradd');
    }
    public function sliderinsert(Request $request){
    	$data = array();
         $time = time();
    	$data['title']=$request->title;
    	$data['sub_title']=$request->sub_title;
    	$data['slide_position']=$request->slide_position;
    	$data['image']=$request->image;
    	$data['description']=$request->description;
    	$image=$request->file('image');
    	 $data['created_at']=date("Y-m-d H:i:s",$time);
    	if($image){
            $image_filename = $image->getClientOriginalName();
            $image->move(public_path('images/slider'), $image_filename);
            $data['image']=$image_filename;
        }
        else{
            $image_filename="noimage.jpg";
        }
    	$result=DB::table('front_slider')->insert($data);
    	return redirect()->route('sliderlist');
    }
    public function sliderlist(){
    	$data['slider_list']=DB::table('front_slider')->get();
    	return view('admin.pages.sliderlist',$data);
    }
    public function slideredit($id){
    	$data['slider_edit']=DB::table('front_slider')->where('id',$id)->first();
    	return view('admin.pages.slideredit',$data);
    }
    public function sliderupdate(Request $request,$id){
    	$data = array();
         $time = time();
    	$data['title']=$request->title;
    	$data['sub_title']=$request->sub_title;
    	$data['slide_position']=$request->slide_position;
    	$data['image']=$request->image;
    	$data['description']=$request->description;
    	$image=$request->file('image');
    	 $data['created_at']=date("Y-m-d H:i:s",$time);
    	if($image){
            $image_filename = $image->getClientOriginalName();
    $image->move(public_path('images/slider'),$image_filename);
            $data['image']=$image_filename;
        }
        else{
            $image_filename="noimage.jpg";
        }
    	$slider_edit=DB::table('front_slider')->where('id',$id)->update($data);
    	return redirect()->route('sliderlist');
    }
     public function sliderdelete($id)
      {
        $sliderdel = DB::table('front_slider')->where('id',$id)->delete();
        //Set Message
           \Session::flash('message','Delete sucessfuly');
        return redirect()->route('sliderlist');
      }

}
