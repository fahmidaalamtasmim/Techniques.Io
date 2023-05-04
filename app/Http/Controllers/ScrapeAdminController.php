<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Goutte\Client;
use App\Models\Phone;
use App\Models\camera;
use App\Models\website;
use App\Models\allProduct;
use App\Models\CameraSingle;
use App\Models\PhoneSingle;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;


use function PHPUnit\Framework\isEmpty;

class ScrapeAdminController extends Controller
{
  function scrape(){
    $cam=camera::all();
    $pho =Phone::all();
    $website = website::all();
    $category = ProductCategory::all();
    return view('scraper.scraperForm',[
        'category'=>$category,
        'website'=>$website,
        'cam'=>$cam,
        'pho'=>$pho,
    ]);
  }


  function w(){
    $website = website::all();
    return view('scraper.addWebsite',[
        'website'=>$website,
    ]);
    }


    function add_website(Request $request){
        $request->validate([
            'website'=>'required',
        ]);

        website::insert([
            'website'=>$request->website,
        ]);
        return back();
    }

//SCRAPE ALLLL
    function s(Request $request){

        if($request->website_id=='AL' || $request->website_id=='AL'){
            return back()->with('e','Select both fields!!');
        }

      
      
        $cat =$request->category_id;
        $web = $request->website_id;

        if($request->btn_submit==1){
    

            if($cat==2 && $web==3){
                return back()->with('err',"No products found");
            }
               
              if($cat==1 && $web==1){
               // echo 'one';
        
                $client = new Client();
                $url = 'https://www.startech.com.bd/camera';
                $page = $client->request('GET',$url);
               
                try{
                   
                    //will delete all
                    // $ph = camera::all();
                    // if($ph != null){
                    //     camera::truncate();
                    // } 
                  
                    $page->filter('.p-item')->each(function($item)use($web){
                        
                        foreach($item as $value){
                            $price= $item->filter('.p-item-price')->text();
                            $name = $item->filter('.p-item-name')->text();
                            $photo = $item->filter('.p-item-img>a>img')->attr('src');
                           // $old_price = $item->filter('.price-old')->text();
                          //  $new_price = $item->filter('.price-new')->text();
                            $details = $item->filter('.p-item-details')->text();
                            $short = $item->filter('.short-description')->text();
                            $product_info =  $item->filter('.p-item-img>a')->attr('href');
                
                                camera::insert(
                                    [
                                        'price'=>$price,
                                        'name'=>$name,
                                       // 'old_price'=>$old_price,
                                       // 'new_price'=>$new_price,
                                        'photo'=>$photo,
                                        'details'=>$details,
                                        'short_desp'=>$short,
                                        'created_at'=>Carbon::now(),
                                        // 'category_id'=>1,
                                        'product_info'=>$product_info,
                                        'web_id'=>$web,
                                        ]
                                        
                                    );    
                            }
                            return back();   
                        });  
                               
                 }catch (\InvalidArgumentException $e) {
                //
                }
                camera::select('category_id')->update([
                    'category_id'=>$cat,
                ]);
                return back(); 
              }
        //////////////////////////////////////////////////////////////////////////////////
              else if($cat==2 && $web==1){
        
                //echo 'two';
                $client = new Client();
                $url = 'https://www.startech.com.bd/mobile-phone';
                $page = $client->request('GET',$url);
                try{
                    //will delete all
                //    $ph = Phone::all();
                //    if($ph != null){
                //        Phone::truncate();
                //        die();
                //    } 
                   $page->filter('.p-item')->each(function($item)use($web){
                       
                       foreach($item as $value){
                           $price= $item->filter('.p-item-price')->text();
                           $name = $item->filter('.p-item-name')->text();
                           $photo = $item->filter('.p-item-img>a>img')->attr('src');
                           //$old_price = $item->filter('.price-old')->text();
                          // $new_price = $item->filter('.price-new')->text();
                           $details = $item->filter('.p-item-details')->text();
                           $short = $item->filter('.short-description')->text();
                           $product_info =  $item->filter('.p-item-img>a')->attr('href');
               
                           
                               Phone::insert(
                                   [
                                       'price'=>$price,
                                       'name'=>$name,
                                       //'old_price'=>$old_price,
                                       //'new_price'=>$new_price,
                                       'photo'=>$photo,
                                       'details'=>$details,
                                       'short_desp'=>$short,
                                    //    'category_id'=>2,
                                    'created_at'=>Carbon::now(),
                                    'product_info'=>$product_info,
                                    'web_id'=>$web,
                                       ]
                                       
                                   );
                           
                          
                        
                               
                           }return back();
                           
                       });            
                           
               
                }catch (\InvalidArgumentException $e) {
               //
               }
               Phone::select('category_id')->update([
                'category_id'=>$cat,
            ]);
                   return back();
               }
               
               else if($cat==1 && $web==3){
        
                $client = new Client();
                $url = 'https://www.globalbrand.com.bd/camera';
                $page = $client->request('GET',$url);
               
                try{
                   //will delete all
                    // $ph = camera::all();
                    // if($ph != null){
                    //     camera::truncate();
                    // } 
                  
                    $page->filter('.product-thumb')->each(function($item)use($web){
                        
                        foreach($item as $value){
                            $price= $item->filter('.price>div>span')->text();
                            $name = $item->filter('.caption>.name>a')->text();
                            $photo = $item->filter('div>img')->attr('src');
                           // $old_price = $item->filter('.price>div>.price-old')->text();
                           // $new_price = $item->filter('.price>div>.price-new')->text();
                          // $details = $item->filter('.shortinfo')->text();
                            $short = $item->filter('.shortinfo')->text();
                            $product_info =  $item->filter('.name>a')->attr('href');
                          // $string = str_replace('৳', 'Taka', $price);
                                camera::insert(
                                    [
                                        'price'=>$price,
                                        'name'=>$name,
                                       // 'old_price'=>$old_price,
                                       // 'new_price'=>$new_price,
                                         'photo'=>$photo,
                                        // 'details'=>$details,
                                        'short_desp'=>$short,
                                        'created_at'=>Carbon::now(),
                                        'web_id'=>$web,
                                        // 'category_id'=>1,
                                        'product_info'=>$product_info,
                                        ]
                                        
                                    );    
                            }
                            return back();   
                        });  
                               
                 }catch (\InvalidArgumentException $e) {
                //
                }
                camera::select('category_id')->update([
                    'category_id'=>$cat,
                ]);
                return back();
               }
        
        
              
            
           
           
          
        
        
        }
//////////////////////////////////////////////
//////////////////////////////////////////////
        /////// Refresh button /////
        else if($request->btn_refresh==2){

            if($cat==2 && $web==3){
                return back()->with('err',"No products found");
            }
               
              if($cat==1 && $web==1){
               // echo 'one';
        
                $client = new Client();
                $url = 'https://www.startech.com.bd/camera';
                $page = $client->request('GET',$url);
               
                try{
                   
                    //will delete all
                    $ph = camera::all();
                    if($ph != null){
                        camera::truncate();
                    } 
                  
                    $page->filter('.p-item')->each(function($item)use($web){
                        
                        foreach($item as $value){
                            $price= $item->filter('.p-item-price')->text();
                            $name = $item->filter('.p-item-name')->text();
                            $photo = $item->filter('.p-item-img>a>img')->attr('src');
                           // $old_price = $item->filter('.price-old')->text();
                          //  $new_price = $item->filter('.price-new')->text();
                            $details = $item->filter('.p-item-details')->text();
                            $short = $item->filter('.short-description')->text();
                            $product_info =  $item->filter('.p-item-img>a')->attr('href');
                
                                camera::insert(
                                    [
                                        'price'=>$price,
                                        'name'=>$name,
                                       // 'old_price'=>$old_price,
                                       // 'new_price'=>$new_price,
                                        'photo'=>$photo,
                                        'details'=>$details,
                                        'short_desp'=>$short,
                                        'created_at'=>Carbon::now(),
                                        // 'category_id'=>1,
                                        'product_info'=>$product_info,
                                        'web_id'=>$web,
                                        ]
                                        
                                    );    
                            }
                            return back();   
                        });  
                               
                 }catch (\InvalidArgumentException $e) {
                //
                }
                camera::select('category_id')->update([
                    'category_id'=>$cat,
                ]);
                return back()->with('p','Done!'); ;
              }
        //////////////////////////////////////////////////////////////////////////////////
              else if($cat==2 && $web==1){
        
                //echo 'two';
                $client = new Client();
                $url = 'https://www.startech.com.bd/mobile-phone';
                $page = $client->request('GET',$url);
                try{
                    //will delete all
                   $ph = Phone::all();
                   if($ph != null){
                       Phone::truncate();
                       
                   } 
                   $page->filter('.p-item')->each(function($item)use($web){
                       
                       foreach($item as $value){
                           $price= $item->filter('.p-item-price')->text();
                           $name = $item->filter('.p-item-name')->text();
                           $photo = $item->filter('.p-item-img>a>img')->attr('src');
                           //$old_price = $item->filter('.price-old')->text();
                          // $new_price = $item->filter('.price-new')->text();
                           $details = $item->filter('.p-item-details')->text();
                           $short = $item->filter('.short-description')->text();
                           $product_info =  $item->filter('.p-item-img>a')->attr('href');
               
                           
                               Phone::insert(
                                   [
                                       'price'=>$price,
                                       'name'=>$name,
                                       //'old_price'=>$old_price,
                                       //'new_price'=>$new_price,
                                       'photo'=>$photo,
                                       'details'=>$details,
                                       'short_desp'=>$short,
                                    //    'category_id'=>2,
                                    'created_at'=>Carbon::now(),
                                    'product_info'=>$product_info,
                                    'web_id'=>$web,
                                       ]
                                       
                                   );
                           
                          
                        
                               
                           }return back();
                           
                       });            
                           
               
                }catch (\InvalidArgumentException $e) {
               //
               }
               Phone::select('category_id')->update([
                'category_id'=>$cat,
            ]);
                   return back()->with('p','Done!'); ;
               }
               
               else if($cat==1 && $web==3){
        
                $client = new Client();
                $url = 'https://www.globalbrand.com.bd/camera';
                $page = $client->request('GET',$url);
               
                try{
                   //will delete all
                    $ph = camera::all();
                    if($ph != null){
                        camera::truncate();
                    } 
                  
                    $page->filter('.product-thumb')->each(function($item)use($web){
                        
                        foreach($item as $value){
                            $price= $item->filter('.price>div>span')->text();
                            $name = $item->filter('.caption>.name>a')->text();
                            $photo = $item->filter('div>img')->attr('src');
                           // $old_price = $item->filter('.price>div>.price-old')->text();
                           // $new_price = $item->filter('.price>div>.price-new')->text();
                          // $details = $item->filter('.shortinfo')->text();
                            $short = $item->filter('.shortinfo')->text();
                            $product_info =  $item->filter('.name>a')->attr('href');
                          // $string = str_replace('৳', 'Taka', $price);
                                camera::insert(
                                    [
                                        'price'=>$price,
                                        'name'=>$name,
                                       // 'old_price'=>$old_price,
                                       // 'new_price'=>$new_price,
                                         'photo'=>$photo,
                                        // 'details'=>$details,
                                        'short_desp'=>$short,
                                        'created_at'=>Carbon::now(),
                                        'web_id'=>$web,
                                        // 'category_id'=>1,
                                        'product_info'=>$product_info,
                                        ]
                                        
                                    );    
                            }
                            return back();   
                        });  
                               
                 }catch (\InvalidArgumentException $e) {
                //
                }
                camera::select('category_id')->update([
                    'category_id'=>$cat,
                ]);
                return back();
               }
        
        
         
        
        
        }
    

      }



////////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////
////   SINGLE PAGE SCRAPE  ////////////////////////////////////////


     
      



      function single_scrape($sid,$cid,$wid){
          //cid = category 
          //sid = product id
          //wid = website id
       
       if($cid==1 && $wid==1){
        $check = CameraSingle::where('product_id',$sid)->get();
            // echo $check;
            // die();
           if($check->isEmpty()){
           // echo 'bro u null';
           $p = camera::findOrFail($sid)->product_info;
           $client = new Client();
           $url = $p;
           $page = $client->request('GET',$url);
           try{//.pd-full  .pd-summary
              $page->filter('.pd-full')->each(function($item) use ($sid,$cid,$wid){
             
                  foreach($item as $value){
                   
                     $specification = $item->filter('table')->text();
                    
                    //   $specification = $item->filter('table');
                     // $price =$item->filter('.product-price')->text();
                      $description = $item->filter('.full-description')->text();
                    // $photo = $item->filter('.basic row>a')->attr('href');
                    
                         CameraSingle::updateOrCreate(
                              [
                               'specification'=>$specification,
                                  'description'=>$description,
                                  // 'photo'=>$photo,
                                  'product_id'=>$sid,
                                  'category_id'=>$cid,
                                  'web_id'=>$wid,
                                 // 'price'=>$price,
                              
                                  ]
                                  
                              ); 
                      }

                  });   
              
                           
                        
           }catch (\InvalidArgumentException $e) {}
           $data = CameraSingle::where('product_id',$sid)->get();
           $photo = camera::where('id',$sid)->get();
               return view('scraper.single',[
                'data'=>$data,
                'photo'=>$photo,
               ]);

    }else{
       // echo 'Product exists';
       $data = CameraSingle::where('product_id',$sid)->get();
       $photo = camera::where('id',$sid)->get();
           return view('scraper.single',[
            'data'=>$data,
            'photo'=>$photo,
           ]);
    }
        }

///////////////////////////////////////////////////////////////////
////////////////// PHONE /////////////////////////////////////////
           else if($cid==2 && $wid==1){
            $check = PhoneSingle::where('product_id',$sid)->get();
            if($check->isEmpty()){
                $p = Phone::findOrFail($sid)->product_info;
            $client = new Client();
            $url = $p;
            $page = $client->request('GET',$url);
           
           
            try{
               $page->filter('.pd-full')->each(function($item)use ($sid,$cid,$wid){
                   
                   foreach($item as $value){
                    $description = $item->filter('.full-description>p')->text();
                   // $price = $item->filter('.product-info-table')->text();
                        $specification = $item->filter('table')->text();
                       
                          PhoneSingle::updateOrCreate(
                               [
                                   'specification'=>$specification,
                                   'description'=>$description,
                                   'product_id'=>$sid,
                                   'category_id'=>$cid,
                                   'web_id'=>$wid,
                                  // 'price'=>$price,
                               
                                ]
                                   
                               ); 
                       }return back();
                   }); 
                //    PhoneSingle::select('category_id')->update([
                //     'category_id'=>$cid,]);           
                       
           
            }catch (\InvalidArgumentException $e) { }
           $data = PhoneSingle::where('product_id',$sid)->get();
           $photo = Phone::where('id',$sid)->get();
               return view('scraper.single',[
                'data'=>$data,
                'photo'=>$photo,
               ]);

            }else{
                //echo 'Product exists';
                $data = PhoneSingle::where('product_id',$sid)->get();
                $photo = Phone::where('id',$sid)->get();
                    return view('scraper.single',[
                     'data'=>$data,
                     'photo'=>$photo,
                    ]);
            }  
              }

     


/////////////////////////////////////////////////////
//////////////////////globalband camera/////////////////
else if($cid==1 && $wid==3){
    $check = CameraSingle::where('product_id',$sid)->get();
 
   if($check->isEmpty()){
   $p = camera::findOrFail($sid)->product_info;
   $client = new Client();
   $url = $p;
   $page = $client->request('GET',$url);
   try{
      $page->filter('.product_extra-242')->each(function($item) use ($sid,$cid,$wid){
     
          foreach($item as $value){
           
              $specification = $item->filter('table')->text();
             // $price =$item->filter('.product-price')->text();
           //   $description = $item->filter('tbody>tr>td')->text();
            // $photo = $item->filter('.basic row>a')->attr('href');
            
                 CameraSingle::updateOrCreate(
                      [
                       'specification'=>$specification,
                         // 'description'=>$description,
                          // 'photo'=>$photo,
                          'product_id'=>$sid,
                          'category_id'=>$cid,
                          'web_id'=>$wid,
                         // 'price'=>$price,
                      
                          ]
                          
                      ); 
              }

          });            
   }catch (\InvalidArgumentException $e) {}
   $data = CameraSingle::where('product_id',$sid)->get();
   $photo = camera::where('id',$sid)->get();
       return view('scraper.single',[
        'data'=>$data,
        'photo'=>$photo,
       ]);

        }else{
// echo 'Product exists';
        $data = CameraSingle::where('product_id',$sid)->get();
        $photo = camera::where('id',$sid)->get();
        return view('scraper.single',[
            'data'=>$data,
            'photo'=>$photo,
        ]);
        }
}
////////////////////////////////////////////////////
/////phone global band
else if($cid==2 && $wid==3){
    $check = PhoneSingle::where('product_id',$sid)->get();
    if($check->isEmpty()){
        $p = Phone::findOrFail($sid)->product_info;
    $client = new Client();
    $url = $p;
    $page = $client->request('GET',$url);
   
   
    try{
       $page->filter('.product_extra-242')->each(function($item)use ($sid,$cid,$wid){
           
           foreach($item as $value){
           // $description = $item->filter('.full-description>p')->text();
           // $price = $item->filter('.product-info-table')->text();
                $specification = $item->filter('table')->text();
               
                  PhoneSingle::updateOrCreate(
                       [
                           'specification'=>$specification,
                          // 'description'=>$description,
                           'product_id'=>$sid,
                           'category_id'=>$cid,
                          // 'price'=>$price,
                          'web_id'=>$wid,
                       
                        ]
                           
                       ); 
               }return back();
           }); 
        //    PhoneSingle::select('category_id')->update([
        //     'category_id'=>$cid,]);           
               
   
    }catch (\InvalidArgumentException $e) { }
   $data = PhoneSingle::where('product_id',$sid)->get();
   $photo = Phone::where('id',$sid)->get();
       return view('scraper.single',[
        'data'=>$data,
        'photo'=>$photo,
       ]);

    }else{
        //echo 'Product exists';
        $data = PhoneSingle::where('product_id',$sid)->get();
        $photo = Phone::where('id',$sid)->get();
            return view('scraper.single',[
             'data'=>$data,
             'photo'=>$photo,
            ]);
    }  
}
 }
     
       
       
/////////////////////////////
//////// Camera Delete ///////////
function camera_delete($cam_id){
    CameraSingle::where('product_id',$cam_id)->delete();
    camera::find($cam_id)->delete();
    return back()->with('cam','Deleted!!');
}
////////////////////////////    
////////////// Phone Delete ////////////////
function phone_delete($pho_id){
    PhoneSingle::where('product_id',$pho_id)->delete();
    Phone::find($pho_id)->delete();
    return back()->with('pho','Deleted!!');
}



/////////////////////////

function cp($cid){

     $cam = camera::find($cid);
    // echo $cam->cc;
    // die();
   
    // $c=camera::find('id',$cid);
    // echo $c->cc;
    // die();
    if($cam->cc==0){
        camera::where('id',$cid)->update(['cc'=>1]);
    }else{
        camera::where('id',$cid)->update(['cc'=>0]);
    }
    return back();
}
////////////
function pp($pid){
   $phone = Phone::find($pid);
   //echo $phone->pp;

   if($phone->pp==0){
    Phone::where('id',$pid)->update(['pp'=>1]);
}else{
    Phone::where('id',$pid)->update(['pp'=>0]);
}
return back();
   
}
}


