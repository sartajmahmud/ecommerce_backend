<?php

namespace App\Http\Controllers;

use App\Models\SalesVisit;
use App\Models\Seller;
use Illuminate\Http\Request;

class SalesVisitController extends Controller
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

    public function addVisit(Request $request){
        $newVisit = new SalesVisit();
        $newVisit->salesman_id = $request->salesman_id;
        $newVisit->seller_id = $request->seller_id;
        $newVisit->contact_person = $request->contact_person;
        $newVisit->contact_detail = $request->contact_detail;
        $newVisit->save();
        return ["success"=>true];
    }

    public function getSalesVisits($id){
        $salesVisits = SalesVisit::where('salesman_id',$id)->get();
        for($i = 0; $i<count($salesVisits); $i++){
            $seller = Seller::find($salesVisits[$i]['seller_id']);
            $salesVisits[$i]['seller'] = $seller;
        }
        return ["success"=> true, "data"=>$salesVisits];
    }
}
