<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Attributes\BackupGlobals;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        # code...

        //dd($request->all());

      
        $request->validate([
            'email'=>'required|unique:students,email',
            'name'=>'required',
            'gender'=>'required',
            'name'=>'required',
            'roll'=>'required|unique:students,roll|starts_with:21,22',
            'branch'=>'required'
        ]);

        $data=[
            'name'=>$request->name,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'roll'=>$request->roll,
            'branch'=>$request->branch,
        ];

        $id = DB::table('students')->insertGetId($data);


        $return_data =[
            "id"=>$id,
            'name'=>$request->name
        ];


        
        return view('partials.confirmed')->with("data",$return_data);


    }
}
