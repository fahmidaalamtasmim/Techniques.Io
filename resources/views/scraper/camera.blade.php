@extends('frontend.techniques')
@section('content')
<div class="container">
    <div class="card-header text-center">Camera <span><strong>{{$total}}</strong></span></div>
    {{-- <a href="{{route('camera')}}" class="btn btn-danger my-2">SCRAPE</a> --}}
    {{-- <a href="{{route('py')}}" class="btn btn-danger my-2">SCRAPE with python</a> --}}
<div class="row">
   
    @foreach ($camera as $p )
    <div class="col-lg-4">
       <div class="card-header">anything else</div>
     
    <div class="card">
        <div class="card-body">
<div class="main-content p-items-wrap">
    <div class="p-item my-3">
      
        <div class="p-item-inner">
            <div class="p-item-img"><img src="{{url($p->photo)}}" alt=""></div>
            <div class="p-item-details">
                <h4 class="p-item-name">{{$p->name}}</h4>
                <div class="short-description">
                    <ul>
                        <li>{{$p->short_desp}}</li>
                    </ul>
                </div>
                <div class="p-item-price">
                    <span class="text-right">{{$p->price}}</span>                      </div>
                    {{-- <div class="actions">
                        <span class="st-btn btn-add-cart" type="button" onclick="cart.add('27511', '1');"><i class="material-icons">shopping_cart</i> Buy Now</span>
                        <span class="st-btn btn-compare" onclick="compare.add('27511');"><i class="material-icons">library_add</i>Add to Compare</span>
                    </div> --}}
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