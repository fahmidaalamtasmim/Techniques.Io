@extends('frontend.techniques')
@section('content')
<div class="container">
    {{-- row --}}
    <div class="card">
        <div class="card-body">
            <div class="row m-auto">

        {{-- image starts --}}
        <div class="basic row">
            <div class="col-md-12 left">
                <div class="images product-images">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($photo as $p)
                            <img src="{{url($p->photo)}}" alt="">
                            @endforeach
                        </div>
                    </div>
              </div>
              </div>
              </div>
        {{-- image ends --}}

       {{-- description starts --}}
       <div class="col-md-7 right" id="product">
        <div class="pd-summary">
            <div class="product-short-info">
                @foreach ($photo as $p)    
                <h1>{{$p->name}}</h1>
                @endforeach
                       <div class="ml-4 mt-5">
                        @foreach ($photo as $p)
                            {{-- <h6><span>Price : </span>{{$p->price}}</h6>   --}}

                            @php
                    $price = explode("৳",$p->price);
                    echo '<h6><span>'.$price[0].'৳'.'</span></h6>';
                            @endphp  

                            @endforeach
                          </div>
              
            </div>

            <div class="short-description" itemprop="offers" >
               
                {{-- <h2>Key Features</h2> --}}
                
                <ul>
                    @foreach ($data as $d)
                    {{-- <li><b>{{substr($d->specification,0,7)}}</b></li><br> --}}
                    {{-- <li>{{substr($d->specification,8,4)}}:&nbsp;{{substr($d->specification,12,9)}}</li><br>
                    <li>{{substr($d->specification,21,4)}}:&nbsp;{{substr($d->specification,25,28)}}</li><br> --}}
                    @php
                       $arr=explode(">",$d->specification);
                     
                       for($a=0;$a<count($arr);$a++){
                           echo '<table><tr><td>'.$arr[$a].'</td></tr></table>';
                       }


                    // $ar[] = $d->specification;
                    // $arr = implode("+",$ar);
                    // echo $arr;
                   



                    @endphp
                    {{-- <li>{{$d->specification}}</li> --}}
                    @endforeach
                </ul>
                
        
    
               
            </div>
             <div class="stickers">
                <div>
                    <h6>Description :</h6>
                @foreach ($data as $d)
                    <span>{{$d->description==null?'No Description':$d->description}}</span>
                @endforeach
            </div>
             </div>
</div>
</div>
       {{-- description ends --}}




    </div>
    </div>       
</div>
</div>
@endsection