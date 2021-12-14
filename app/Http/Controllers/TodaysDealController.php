<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Product;
use App\Models\TodaysDeal;
use App\Models\Category;
use Illuminate\Http\Request;

class TodaysDealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todaysDeal = TodaysDeal::all();
        for ($i = 0; $i < count($todaysDeal); $i++) {
            $product = Product::find($todaysDeal[$i]["product_id"]);
            $todaysDeal[$i]["product"] = $product;
            $media = Media::find($todaysDeal[$i]["product"]['media_id']);
            $todaysDeal[$i]["product"]["media"] = $media;
            $category = Category::find($todaysDeal[$i]["product"]['category_id']);
            $todaysDeal[$i]["product"]["category"] = $category;
            $categoryMedia = Media::find($todaysDeal[$i]["product"]['category']['media_id']);
            $todaysDeal[$i]["product"]["category"]["media"] = $categoryMedia;
        }

        return ["success"=>true, "data"=>$todaysDeal];
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
