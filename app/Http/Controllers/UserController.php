<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $users = User::all();
        return view('list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
       return view('create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image= $request->image;
        $image_name = time().rand(100000,999999).$image->getClientOriginalName();
        $image->move('uploads/',$image_name);

        $hobby = null;
        if ($request->hobby) {
            $hobby = implode(',', $request->hobby);
        } 

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mo_no = $request->mo_no;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->hobby = $hobby;
        $user->image =  $image_name;
        $user->city_id = $request->city_id;
        $user->description = $request->description;
        $user->save();
        // dd($request->all());

        return redirect('/');
  
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
    public function edit(Request $request)
    {
        $id = $request->id;
        $cities = City::all();
        $user = User::find($id);
        return view('update',compact('user','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $hobby = null;
        if ($request->hobby) {
            $hobby = implode(',', $request->hobby);
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mo_no = $request->mo_no;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->hobby = $hobby;
        $user->city_id = $request->city_id;
        $user->description = $request->description;
        $user->save();

        return redirect('user/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  destroy(Request $request)
    {  
         $id = $request->id;
        
        // dd($id);
        $user = User::find($id);
        $user->delete();

        return response()->json(["massage"=>"Data Deleted Succesfully","status"=>200]);
        
       }
}
