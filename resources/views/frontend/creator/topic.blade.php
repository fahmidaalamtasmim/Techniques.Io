@extends('frontend.creator.creatorDashboard')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Blog Topic</h4>
        {{-- <p class="card-description"> Basic form elements </p> --}}
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('topic.add')}}">
            @csrf
            <input type="hidden" name="u_id" value="{{Auth::guard('creator')->user()->id}}">

          <div class="form-group">
            <label for="exampleInputName1">Topic Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          
          <div class="form-group">
            <label for="exampleSelectGender">Category</label>
            <select class="form-control" name="category_id" id="exampleSelectGender">
                <option>--Select--</option>
                @foreach ($categories as $c)  
                <option value="{{$c->id}}">{{$c->category_name}}</option>
                @endforeach
              
            </select>
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">Textarea</label>
            <textarea name="desp" class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>

          <div class="form-group">
            <label>Image upload</label>
           
            <div class="input-group col-xs-12">
             <input type="file" name="photo" class="form-control">
              
            </div>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Add</button>
         
        </form>
      </div>
    </div>
  </div>
@endsection