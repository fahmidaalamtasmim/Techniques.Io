<?php

namespace App\Http\Controllers;

use App\Models\scraper;
use Goutte\Client;
use Illuminate\Http\Request;

class ScraperController extends Controller
{
    //
    protected $results = array();
   
    protected $arr = array();
       function scraper(){
      
        $client = new Client();
        $url = 'https://www.startech.com.bd/';
        //$page = $client->request('GET',$url);
        $pa = $client->request('GET',$url);
       

    // $page->filter('#module-481')->each(function($item)
    //     {
    //         $this->results[$item->filter('.p-item')->text()]=$item->filter('.p-items-wrap')->text();
    //     });
///////////////////


//name
// $arr=$pa->filter('.p-item')->each(function($item){
//    // $nam=$item->filter('.p-item-name')->text()->save();
//     foreach($item as $key=>$value){
//       //  $value= $item->filter('.p-item-name')->text();
//        $nam= $item->filter('.p-item-name')->text();
//       //  $value->$price= $item->filter('.p-item-price')->text();
//        //$price= $item->filter('.p-item-price')->text();
//       // echo $value.'<br>';

//      scraper::insert(
//         [
//             'name'=>$nam,
//         ]

//         );
//     }
    
// });



try {
   
    //price,name ,old price,new price,
    $arr=$pa->filter('.p-item')->each(function($item){
        // $nam=$item->filter('.p-item-name')->text()->save();
        foreach($item as $key=>$value){
            $value= $item->filter('.p-item-price')->text();
           $name = $item->filter('.p-item-name')->text();
            $photo = $item->filter('.p-item-img>a>img')->attr('src');
            // $old_price = $item->filter('.price-old')->text();
           // $new_price = $item->filter('.price-new')->text();
            $details = $item->filter('.p-item-details')->text();
            scraper::insert(
                [
                    'price'=>$value,
                    'name'=>$name,
                  //  'old_price'=>$old_price,
                   // 'new_price'=>$new_price,
                    'photo'=>$photo,
                    'details'=>$details,
                    ]
                    
                );
                
            }return back();
            
        });
        
        //$d = $page->filter(".m-header")->text();
       
        // $data = $this->results;
        
        // print_r($data);
        
        // $bermudas = array();
        // foreach($data as $key => $value){
            //   array_push($bermudas, array('name' => $key, $value));
            // }
            
        } catch (\InvalidArgumentException $e) {
            // Handle the current node list is empty..
        }
            
            $sc = scraper::all();
            $total = scraper::count();
            return view('scraper.scraper',[
                'sc'=>$sc,
                'total'=>$total,
            ]);




    }
}
