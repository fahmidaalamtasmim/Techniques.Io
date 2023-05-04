<?php

namespace App\Http\Controllers;

use App\Models\topic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\categoryModel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class topicController extends Controller
{
    function topic(){
        $categories =categoryModel::all();
        return view('frontend.creator.topic',[
            'categories'=>$categories,
        ]);
    }
function topic_list(){
    $id =Auth::guard('creator')->user()->id;
    $topic = topic::where('u_id',$id)->get();
    return view('frontend.creator.topiclist',[
        'topic'=>$topic,
    ]);
}



    function topic_add(Request $request){
       // echo $request->category_id;
       if($request->photo==null){
        //echo 'yes';
        topic::insert([
            'u_id'=>$request->u_id,
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'desp'=>$request->desp,
            'created_at'=>Carbon::now(),
        ]);
       }else{
        //validate image
    $request->validate([
        'photo'=>['required','image'],
    ]);
    
   //delete previous image
//    if($request->photo != null){
//     $previous_photo = public_path('uploads/topic/'.$request->photo);
//     unlink($previous_photo);
//    }
   
    //image file name creation
        $photo = $request->photo ;
        $extension = $photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ','-',$request->name)).'.'.$extension;

        Image::make($photo)->save(public_path('uploads/topic/'.$file_name));
        topic::insert([
            'u_id'=>$request->u_id,
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'desp'=>$request->desp,
            'photo'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);

       }
      return back();
    }

    function topic_delete($tid){
        $tp =topic::find($tid);
        if($tp->photo!=null){
            $previous_photo = public_path('uploads/topic/'.$tp->photo);
            unlink($previous_photo);
        }
       

        topic::find($tid)->delete();

        return back();
    }




}
