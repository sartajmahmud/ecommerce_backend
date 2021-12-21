<?php

namespace App\Http\Controllers;

use App\Models\SalesOrder;
use App\Models\SalesOrderItem;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
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

    public function addOrder(Request $request){
        $newOrder = new SalesOrder();
        $newOrder->salesman_id = $request->salesman_id;
        $newOrder->seller_id = $request->seller_id;
        $newOrder->reference = $request->reference;
        $newOrder->order_date = now();
        $newOrder->delivery_date = now();
        //need to make dates dynamic
        $newOrder->save();
        return ['success'=>true];
    }

    public function getSalesOrder($id){
        $salesOrders = SalesOrder::where('salesman_id',$id)->get();
        for($i =0 ; $i <count($salesOrders); $i++){
            $products = SalesOrderItem::where('sales_order_id',$salesOrders[$i]['id'])->get();
            $salesOrders[$i]['products'] = $products;
        }


        return ["success"=>true,"data"=>$salesOrders];

    }
}
