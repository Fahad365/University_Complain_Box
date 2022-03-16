<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
session_start();

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');


    }

    public function admindashboard(Request $request)
    {
      $admin_email=$request->admin_email;
      $admin_password=md5($request->admin_password);
      $result=DB::table('admin')
              ->where('email', $admin_email)
              ->where('password', $admin_password)
              ->first();
              //dd($result);
      if($result){
         // Session::put('admin_name',$result->admin_name);
         // dd($result);

          return Redirect::to('/allcomplain');
      }else{
        Session::put('message', 'Email or Password Invalid');
        return Redirect::to('/admin');
    }
  }

  public function adminlogout()
  {
    Session::flush();
    return Redirect::to('/admin');

  }


 public function allcomplain()
  {


    $complain=DB::table('complaintables')
              ->get();

      return view('admin.complaintable')
             ->with('complain',$complain);


  }

}
