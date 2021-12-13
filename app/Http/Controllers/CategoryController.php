<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        for ($i = 0; $i < count($categories); $i++) {
            $media = Media::find($categories[$i]['media_id']);
            $categories[$i]["media"] = $media;
        }
        return ["success"=> true,"data"=>$categories];
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

    public function getCategoryProduct(Request $request){
        $products = Product::where('category_id',$request->categoryID)->get();
        //return count($products);
        for($i=0; $i<count($products); $i++){
            $category = Category::find($products[$i]['category_id']);
            $products[$i]["category"] = $category;
            $media = Media::find($products[$i]['media_id']);
            $products[$i]["media"] = $media;
            $categoryMedia = Media::find($products[$i]["category"]['media_id']);
            $products[$i]["category"]["media"] = $categoryMedia;
        }
        return ["success"=>true,"data"=>$products];

    }
}
