<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\topic;
use App\Models\camera;
use App\Models\comment;
use Illuminate\Http\Request;
use App\Models\categoryModel;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class frontendController extends Controller
{
    function techniques(){
        return view('frontend.techniques');
    }
    function ttt(){
        return view('frontend.tas');
    }
    function blog(){
        $topic =topic::where('state',1)->latest()->get();
        return view('blog',[
            'topic'=>$topic,
        ]);
    }
    
    function blogsingle($tid){


       // echo $tid;
      //  die();
        $ccc=comment::take(5)->latest()->get();
        $cat =categoryModel::all();
       // $topic=topic::where('state',1)->take(3)->latest()->get();
        $topic=topic::where('state',1)->take(3)->latest()->get();
        $total =comment::count();
        $ttt =topic::find($tid);
        return view('blogsingle',[
            'ttt'=>$ttt,
            'ccc'=>$ccc,
            'total'=>$total,
            'topic'=>$topic,
            'cat'=>$cat,
        ]);
    }

    function cat($cid){
       
        $cat = topic::where('category_id',$cid)->get();
     
        // echo $cat;
        // die();
        return view('frontend.category1',[
            'cat'=>$cat,
        ]);
    }


    function search(Request $request){
        //null check operator
        $search=$request['search']?? "";
        if($search!=""){
            //where clause
            $topic = topic::where('name','LIKE','%'.$request->search.'%')->where('state',1)->get();
        }else{
           $topic= topic::all();
        }
      //                                                                                                                                                                                                                                                $data = compact('topic','search');
       //return view('frontend.search')->with($data);
        return view('frontend.search',[
            'topic'=>$topic,
        ]);
    }
    
  function allproduct($id){
 
       $cat = ProductCategory::find($id);
       
      // echo $cat_name;

    //    if( $cat->name == 'Camera'){
    //     $pro = camera::where('category_id',$id)->get();
    //     $total= camera :: count();
    //    }
    //    if ( $cat->name == 'Mobile'){
    //     $pro = Phone::where('category_id',$id)->get();
    //     $total= Phone :: count();
    //    }
     
    //    return view ('frontend.showallproducts',[
    //     'pro'=>$pro,
    //     'total'=>$total,
    //    ]);

    if( $cat->name == 'Camera'){
        $pro = camera::where('category_id',$id)->where('cc',1)->get();
       // $pro =camera::where('state',1)
        $total= camera :: count();
       }


       if ( $cat->name == 'Mobile'){
       // $pro = Phone::where('state',1)->where('category_id',$id)->get();
        $pro = Phone::where('pp',1)->where('category_id',$id)->get();
        $total= Phone :: count();
       }
     
       return view ('frontend.showallproducts',[
        'pro'=>$pro,
        'total'=>$total,
       ]);

  }


}
