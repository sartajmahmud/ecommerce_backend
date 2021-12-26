<?php

namespace App\Http\Controllers;
use App\Models\SalesmanAttendance;
use Illuminate\Http\Request;

class SalesmanAttendanceController extends Controller
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

    public function entryAttendance(Request $request){
        $newAttendance = new SalesmanAttendance();
        $newAttendance->user_id = $request->id;
        $newAttendance->latitude = $request->latitude;
        $newAttendance->longitude = $request->longitude;
        $newAttendance->save();
        return ['success'=> true, 'message'=> 'attendance added succesfully'];
    }

    public function getUserAttendance($id){
        $attedances = SalesmanAttendance::where('user_id',$id)->get();
        return ['success'=> true, 'data'=> $attedances];
    }
}