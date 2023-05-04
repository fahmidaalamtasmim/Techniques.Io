<?php

namespace App\Http\Controllers;

use App\Models\camera;
use Illuminate\Http\Request;
use Goutte\Client;

class cameraScraper extends Controller
{
    function cameraview(){
        $camera =camera::all();
        $total =camera::count();
        return view('scraper.camera',[
            'camera'=>$camera,
            'total'=>$total,
        ]);
    }

    // function camera(){
    //     $client = new Client();
    //     $url = 'https://www.startech.com.bd/camera';
    //     $page = $client->request('GET',$url);

    //     try{

    //         $ph = camera::all();
    //         if($ph != null){
    //             camera::truncate();
    //             //  echo 'hello';
    //             //  die();
    //         } 
        
            
    //         $page->filter('.p-item')->each(function($item){
                
    //             foreach($item as $value){
    //                 $price= $item->filter('.p-item-price')->text();
    //                 $name = $item->filter('.p-item-name')->text();
    //                 $photo = $item->filter('.p-item-img>a>img')->attr('src');
    //                 $old_price = $item->filter('.price-old')->text();
    //                 $new_price = $item->filter('.price-new')->text();
    //                 $details = $item->filter('.p-item-details')->text();
    //                 $short = $item->filter('.short-description')->text();
        
                    
    //                     camera::insert(
    //                         [
    //                             'price'=>$price,
    //                             'name'=>$name,
    //                             'old_price'=>$old_price,
    //                             'new_price'=>$new_price,
    //                             'photo'=>$photo,
    //                             'details'=>$details,
    //                             'short_desp'=>$short,
    //                             'category_id'=>2,
    //                             ]
                                
    //                         );
                    
                   
                 
                        
    //                 }return back();
                    
    //             });            
                    
        
    //      }catch (\InvalidArgumentException $e) {
    //     //
    //     }
    //         return back();
       
    // }
}
