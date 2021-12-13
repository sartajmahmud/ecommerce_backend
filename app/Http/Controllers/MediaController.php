<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
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

    public function uploadImage(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
//        ]);
//        if ($validator->fails()) {
//            return sendCustomResponse($validator->messages()->first(),  'error', 500);
//        }
        $uploadFolder = 'medias';
        $image = $request->file('image');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
        $uploadedImageResponse = array(
                "image_name" => basename($image_uploaded_path),
                "image_url" => Storage::disk('public')->url($image_uploaded_path),
    "mime" => $image->getClientMimeType()
 );
        $media = new Media();
        $media->name = $uploadedImageResponse["image_name"];
        $media->url = $uploadedImageResponse["image_url"];
        $media->save();

 return ["success"=>true, "data"=>$uploadedImageResponse];
}
}
