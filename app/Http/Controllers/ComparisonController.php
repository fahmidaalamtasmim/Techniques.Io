<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\camera;
use App\Models\Comparison;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ComparisonController extends Controller
{
   function comparison(Request $request){
    $cam = camera::where('cc',1)->get();
    $pho = Phone::where('pp',1)->get();
    $camera = new Collection($cam);
    $phone = new Collection($pho);
    $all = $camera->merge($phone)->shuffle();

    $c1 =camera::where('name',$request->one)->get();
    $p1=Phone::where('name',$request->one)->get();
    $cam1 = new Collection($c1);
    $ph1 = new Collection($p1);
    $mix1 = $cam1->merge($ph1);
  
 
   

    $c2 =camera::where('name',$request->two)->get();
    $p2=Phone::where('name',$request->two)->get();
    $cam2 = new Collection($c2);
    $ph2 = new Collection($p2);
    $mix2 = $cam2->merge($ph2);




    return view('comparison',[
        'all'=>$all,
        'mix1'=>$mix1,
        'mix2'=>$mix2,
    ]);

   }

 
   

   


      
        
    
       

   
}
