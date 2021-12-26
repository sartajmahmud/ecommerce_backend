<?php

namespace App\Http\Controllers;

use App\Models\SalesVisit;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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



            //$seller = Seller::where('id',$salesOrders[$i]['seller_id'])->get();
            $user = User::find($id);




        return ["success"=>true,"data"=>$user];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $editUser = User::find($request->id);
        $editUser->name = $request->name;
        $editUser->email = $request->email;
        $editUser->phoneNumber = $request->phoneNumber;
        $editUser->save();
        return ["success"=>true];
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

    public function mobileLogin(Request $request)
    {
        $user = User::where('phoneNumber',$request->phoneNumber)->where('password',$request->password)->first();
        $success = false;
        if($user != null){
            $success = true;
            if($request->device_token != null){
                $user->device_token = $request->device_token;
                $user->save();
            }
            return ['success' => $success , "data"=>$user];
        }else{
            return ['success' => $success, "data"=>null];
        }

    }

    public function mobileSignUp(Request $request)
    {
        $newUser = new User();
        $newUser->role_id = $request->role_id;
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->phoneNumber = $request->phoneNumber;
        $newUser->password = $request->password;
        $newUser->device_token = $request->device_token;
        $newUser->save();
        return ['success'=> true, 'message'=>'User successfully created'];
    }

    public function checkDuplicate(Request $request)
    {
        $user = User::where('phoneNumber',$request->phoneNumber)->get();
        if(count($user) == 0){
            return ["success"=>false];
        }
        else {
            return ["success"=>true];
        }
    }
}
