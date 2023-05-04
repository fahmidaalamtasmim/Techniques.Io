<?php

namespace App\Http\Controllers;




use App\Models\topic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\categoryModel;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;


class categoryController extends Controller
{
    //view
   function category(){
    $category = categoryModel::all();
    return view('admin.category',[
        'category'=>$category,
    ]);
   }

   //add category
   function category_add(Request $request){
    //validation
    $request->validate([
        'category_name'=>'required|unique:category_Models',
        'category_image'=>'image'
    ]);
    if($request->category_image==null){
        categoryModel::insert([
            'category_name'=>$request->category_name,
            'created_at'=>Carbon::now(),
        ]);
       
    }else{
        $category_img = $request->category_image ;
        $extension = $category_img->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ','-',$request->category_name)).'.'.$extension;

        Image::make($category_img)->save(public_path('uploads/category/'.$file_name));
        categoryModel::insert([
            'category_name'=>$request->category_name,
            'category_image'=>$file_name,
        ]);
        
    }

    return back();

    
   }
   //delete category

   function category_delete($category_id){
    $f=$category_id;
   $c = categoryModel::find($category_id);

   if($c->category_image!=null){
    // $previous_photo = public_path('uploads/category/'.$c->category_image);
    // unlink($previous_photo);

                    ////////////////////TOPIC STARTS
                    $topic=topic::where('category_id',$category_id)->get();
                    //    echo $topic;
                    //    die();
                    foreach($topic as $t){

                        if($t->photo!=null){
                            $previous_photo = public_path('uploads/topic/'.$t->photo);
                            unlink($previous_photo);
                        }

                        topic::find($t->id)->delete();
                    }
                    /////////////////////////TOPIC ENDS

                    $previous_photo = public_path('uploads/category/'.$c->category_image);
                     unlink($previous_photo);

                    categoryModel::find($category_id)->delete();
                    return back();

   }
 

   ////////////////////TOPIC STARTS
   $topic=topic::where('category_id',$category_id)->get();
   //    echo $topic;
   //    die();
   foreach($topic as $t){

       if($t->photo!=null){
           $previous_photo = public_path('uploads/topic/'.$t->photo);
           unlink($previous_photo);
       }

       topic::find($t->id)->delete();
   }
   /////////////////////////TOPIC ENDS

    categoryModel::find($category_id)->delete();
    return back();

   }
  
}
