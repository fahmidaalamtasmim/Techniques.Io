@extends('layouts.adminDashboard')
@section('content')


<div class="row">
    <div class="col-lg-4 ">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add category</h4>
              
              <form class="forms-sample" method="POST" action="{{route('add.category')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label for="exampleInputUsername1">Category Name</label>
                  <input type="text" class="form-control"name="category_name">
                </div>
                    @error('category_name')
                          <strong class="text-danger">{{$message}}</strong>  
                        @enderror


                <div class="form-group">
                  <label for="exampleInputEmail1">Category Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="category_image"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                </div>

                <div class="my-2">
                    <img width="200" src="" id="blah" alt="">
                  </div>
                  @error('category_image')
                          <strong class="text-danger">{{$message}}</strong>  
                        @enderror
                <button type="submit" class="btn btn-primary mr-2">Add category</button>
                    
              </form>
            </div>
            </div>
          </div>


         {{-- table --}}
          <div class="col-lg-8 my-2 ">
              <div class="card">
                   <div class="card-body">
                       <h4 class="card-title">Category list</h4>
                          <div class="table-responsive">
                            <table class="table table-hover">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Category Name</th>
                  <th>Category Image</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @foreach ($category as $sl=>$u)                          
                <tr>
                    <td>{{$sl+1}}</td>
                    <td>{{$u->category_name}}</td>
                    
                    <td>
                      @if($u->category_image == null)
                      <img src="{{ Avatar::create($u->category_name)->toBase64() }}">
                    @else
                    <img  src="{{asset('uploads/category')}}/{{$u->category_image}}" alt="">
                    @endif
 
                    </td>
                   
                    <td>
                        <a href="{{route('category.delete',$u->id)}}" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
          </div>
          </div>
          </div>

        </div>


@endsection