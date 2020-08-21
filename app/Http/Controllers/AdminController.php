<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_role = Auth::user()->user_role;
        session(['user_role' => $user_role]);

        $data['patientall'] = DB::table('patient')->count();
        $data['appointment'] = DB::table('appointment')->count();
        $data['doctorall'] = DB::table('doctor')->count();
        $data['usersall'] = DB::table('users')->count();
      return view('admin.master_admin',$data);
    }

    public function dashbord(){
        $user_role = Auth::user()->user_role;
        session(['user_role' => $user_role]);
        $data['patientall'] = DB::table('patient')->count();
        $data['appointment'] = DB::table('appointment')->count();
        $data['doctorall'] = DB::table('doctor')->count();
        $data['usersall'] = DB::table('users')->count();
        return view('admin.pages.dashbord',$data);
    }
    public function appointmentAdmin()
    {
        return view('admin.pages.appointmentadd');
    }
    public function doctoradd()
    {
        return view('admin.pages.doctoradd');
    }
    public function doctorlist()
    {
        return view('admin.pages.doctorlist');
    }
    public function doctoredit()
    {
        return view('admin.pages.doctoredit');
    }
    public function departmentadd()
    {
        return view('admin.pages.departmentadd');
    }
    public function departmentlist()
    {
        return view('admin.pages.departmentlist');
    }

    public function patientadd()
    {
        return view('admin.pages.patientadd');
    }
    public function patientlist()
    {
        return view('admin.pages.patientlist');
    }
    public function documentlist()
    {
        return view('admin.pages.documentlist');
    }
    public function documentadd()
    {
        return view('admin.pages.documentadd');
    }
    public function noticeadd()
    {
        return view('admin.pages.noticeadd');
    }
    public function noticelist()
    {
        return view('admin.pages.noticelist');
    }
    public function notice_edit()
    {
        return view('admin.pages.notice_edit');
    }
    public function accountadd()
    {
        return view('admin.pages.accountadd');
    }
    public function login(){
        return view('auth.login');
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
    public function update(Request $request, $id)
    {
        //
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
}
