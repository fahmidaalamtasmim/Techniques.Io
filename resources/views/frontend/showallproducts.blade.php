@extends('frontend.techniques')
@section('content')
<div class="container">
    <div class="card-header text-center">Products <span><strong>{{$total}}</strong></span></div>


    <div class="row">
        @foreach ($pro as $c )
        <div class="col-lg-4">
           {{-- <div class="card-header">anything else</div> --}}
        <div class="card">
            <div class="card-body">
    <div class="main-content p-items-wrap">
        <div class="p-item my-3">
          
            <div class="p-item-inner">
                <div class="p-item-img"><img src="{{url($c->photo)}}" alt=""></div>
                <div class="p-item-details">
                    <h4 class="p-item-name"><a href="{{route('single',[$c->id,$c->category_id,$c->web_id])}}">{{$c->name}}</a></h4>
                    <div class="short-description">
                        <ul>
                            <li>{{$c->short_desp}}</li>
                        </ul>
                    </div>
                    <div class="p-item-price">
                        {{-- <span class="text-right">{{$c->price}}</span>   --}}

                        @php
                        $price = explode("৳",$c->price);
                        echo '<span>'.$price[0].'৳'.'</span>';
                                @endphp  


                        {{-- <span class="text-right">{{real_escape_string($c->price)}}</span>   --}}
                    </div>
                      
                    </div>
                </div>
                
            </div>
        </div>
       </div>
    </div>
    </div>
    @endforeach
    </div>
   

  








</div>
@endsection