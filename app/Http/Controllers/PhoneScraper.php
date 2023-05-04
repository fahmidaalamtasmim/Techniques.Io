<?php

namespace App\Http\Controllers;

use App\Models\allProduct;
use Goutte\Client;
use App\Models\Phone;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;

class PhoneScraper extends Controller
{

function phoneview(){
    $phone =Phone::all();
    $total =Phone::count();
    return view('scraper.phone',[
        'phone'=>$phone,
        'total'=>$total,
    ]);
}




//protected $arr = array();
// function phone(){
//  $client = new Client();
//  $url = 'https://www.startech.com.bd/mobile-phone';
//  $page = $client->request('GET',$url);


//  try{

//     $ph = Phone::all();
//     if($ph != null){
//         Phone::truncate();
//         //  echo 'hello';
//         //  die();
//     } 



// //takes single page data starts
// //    $page->filter('.p-item')->each(function($item){
// //     $photo = $item->filter('.p-item-img>a')->html();
// //      });

// //      print_r($page);
// //takes single page data ends




// //   $page->filter('.p-item')->each(function($item){
//    // $page->filter('.p-item-img>a')->link();
  
// //   });





//     $page->filter('.p-item')->each(function($item){
        
//         foreach($item as $value){
//             $price= $item->filter('.p-item-price')->text();
//             $name = $item->filter('.p-item-name')->text();
//             $photo = $item->filter('.p-item-img>a>img')->attr('src');
//            // $old_price = $item->filter('.price-old')->text();
//            // $new_price = $item->filter('.price-new')->text();
//             $details = $item->filter('.p-item-details')->text();
//             $short = $item->filter('.short-description')->text();
//             //$product_info =  $item->filter('.p-item-img>a')->link();
//             $product_info =  $item->filter('.p-item-img>a')->attr('href');

          
            
//                 Phone::insert(
//                     [
//                         'price'=>$price,
//                         'name'=>$name,
//                         //'old_price'=>$old_price,
//                        // 'new_price'=>$new_price,
//                         'photo'=>$photo,
//                         'details'=>$details,
//                         'short_desp'=>$short,
//                         'category_id'=>2,
//                         'product_info'=>$product_info,
//                         ]
                        
//                     );
            
           
         
                
//             }return back();
//         });            
            

//  }catch (\InvalidArgumentException $e) {
// //
// }
//     return back();
// }
function phone(){
    $client = new Client();
    $url = 'https://www.startech.com.bd/infinix-smart-6-hd';
    $page = $client->request('GET',$url);
   
   
    try{
       $page->filter('#specification')->each(function($item){
           
           foreach($item as $value){
               $details= $item->filter('table')->text();
                $name = $item->filter('td')->text();
            //    $photo = $item->filter('.p-item-img>a>img')->attr('src');
           
            //    $details = $item->filter('.p-item-details')->text();
            //    $short = $item->filter('.short-description')->text();
            
            //    $product_info =  $item->filter('.p-item-img>a')->attr('href');
   
             
               
                  allProduct::insert(
                       [
                           //'price'=>$price,
                           'name'=>$name,
                        //    'photo'=>$photo,
                           'details'=>$details,
                        //    'short_desp'=>$short,
                        //    'category_id'=>2,
                        //    'product_info'=>$product_info,
                           ]
                           
                       );
               
              
            
                   
               }return back();
           });            
               
   
    }catch (\InvalidArgumentException $e) {
   //
   }
       return back();
   }
   


}
