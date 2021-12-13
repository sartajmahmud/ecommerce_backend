<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use App\Models\TopCategory;
use Illuminate\Http\Request;

class TopCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topCategories = TopCategory::all();
        for ($i = 0; $i < count($topCategories); $i++) {
            $product = Product::find($topCategories[$i]["product_id"]);
            $topCategories[$i]["product"] = $product;
            $media = Media::find($topCategories[$i]["product"]['media_id']);
            $topCategories[$i]["product"]["media"] = $media;
            $category = Category::find($topCategories[$i]["product"]['category_id']);
            $topCategories[$i]["product"]["category"] = $category;
            $categoryMedia = Media::find($topCategories[$i]["product"]['category']['media_id']);
            $topCategories[$i]["product"]["category"]["media"] = $categoryMedia;
        }

        return $topCategories;
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
