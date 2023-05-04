<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\camera;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class SearchProduct extends Controller
{
   function search_product(Request $request){
  
  $cid = $request->category_id;
 
   if($cid =='1'){
      $camera = camera::where('name','LIKE','%'.$request->search.'%')->where('category_id', $cid)->where('cc',1)->get();
      return view('scraper.searchall',
      ['camera'=>$camera,
        'cid'=>$cid
      ]);
     
    }
    
    
    if($cid=='2'){
        $phone = Phone::where('name','LIKE','%'.$request->search.'%')->where('category_id', $cid)->where('pp',1)->get();
        return view('scraper.searchall',[
            'phone'=>$phone,
            'cid'=>$cid
            ]);
    }
    
    if($cid=='C'){
       
       // $camera = camera::where('name','LIKE','%'.$request->search.'%')->get()->toArray();
      // $phone = Phone::where('name','LIKE','%'.$request->search.'%')->get()->toArray();


        $camera = camera::where('cc',1)->where('name','LIKE','%'.$request->search.'%')->get();
        $phone = Phone::where('pp',1)->where('name','LIKE','%'.$request->search.'%')->get();
     

     


        $cam = new Collection($camera);
        $ph = new Collection($phone);
        $all = $cam->merge($ph);
        return view('scraper.searchall', [
            'all'=>$all,
            'cid'=>$cid,
        ]);
       
    }
  
 
   


}
}
