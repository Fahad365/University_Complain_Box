<?php

namespace App\Http\Controllers;

use App\complaintable;
use Illuminate\Http\Request;
use Session;
session_start();

class ComplaintableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data=new complaintable;
        if($request->file('file')){
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file=$filename;
        }
        $data->title=$request->title;
        $data->email=$request->email;
        $data->complaintype=$request->caption;
       
        $data->save();
        Session::put('message','"Your Complain Has Been Submitted Successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\complaintable  $complaintable
     * @return \Illuminate\Http\Response
     */
    public function show(complaintable $complaintable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\complaintable  $complaintable
     * @return \Illuminate\Http\Response
     */
    public function edit(complaintable $complaintable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\complaintable  $complaintable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, complaintable $complaintable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\complaintable  $complaintable
     * @return \Illuminate\Http\Response
     */
    public function destroy(complaintable $complaintable)
    {
        //
    }

    public function userdashboard()
    {
        
    }
}
