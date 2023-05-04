<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class commentController extends Controller
{
    function comment(Request $request){
        // echo $request->name;
        // die();
        comment::insert([
            'name'=>$request->name,
            'comment'=>$request->comment,
            'email'=>$request->email,
            'created_at'=>Carbon::now(),

        ]);
        return back();
    }

    function clist(){
        $ccc=comment::all();
        return view('admin.clist',[
            'ccc'=>$ccc,
        ]);
    }
}
