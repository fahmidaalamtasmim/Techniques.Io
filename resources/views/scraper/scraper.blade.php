@extends('frontend.techniques')
@section('content')


<div class="container">
    <strong>Total:{{$total}}</strong>

<div class="row"> 
   @foreach ($sc as $s)
   <div class="card">
        <div class="col-span-3 my-2">
        <div class="card-header"><h3>{{$s->name}}</h3></div>
        <div class="card-body">
            <img src="{{url($s->photo)}}" alt="">
            <p>Price:{{$s->price}}</p>
            {{-- <p>old price:{{$s->old_price}}</p> --}}
            {{-- <p>new price:{{$s->new_price}}</p> --}}
            <p>Details:{{$s->details}}</p> 
                     
</div>
</div>
</div>

@endforeach
</div>



</div>
@endsection