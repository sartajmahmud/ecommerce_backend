<?php

namespace App\Http\Controllers;

use App\Models\AssignedSeller;
use App\Models\Inventory;
use App\Models\Media;
use App\Models\Product;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\True_;

class SellerController extends Controller
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

    public function getAssignedSellers($id){
        $assignedSellers = AssignedSeller::where('user_id',$id)->get();
        for ($i = 0; $i < count($assignedSellers); $i++) {
            $user = User::find($assignedSellers[$i]["user_id"]);
            $assignedSellers[$i]["user"] = $user;
            $seller = Seller::find($assignedSellers[$i]["seller_id"]);
            $assignedSellers[$i]["seller"] = $seller;
            $inventory = Inventory::find($seller["inventory_id"]);
            $media = Media::find($seller["media_id"]);
            $assignedSellers[$i]["seller"]["inventory"] = $inventory;
            $assignedSellers[$i]["seller"]["media"] = $media;
            $product = Product::find($inventory["product_id"]);
            $assignedSellers[$i]["seller"]["inventory"]["product"] = $product;
        }
        return ['success'=> true, 'data'=> $assignedSellers];
    }
}
