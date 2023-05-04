@extends('layouts.adminDashboard')
@section('content')


<div class="row">
    <div class="col-lg-4 ">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add category</h4>
              
              <form class="forms-sample" method="POST" action="{{route('add.product')}}">
                @csrf

                <div class="form-group">
                  <label for="exampleInputUsername1">Category Name</label>
                  <input type="text" class="form-control" name="name">
                </div>


                    @error('name')
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
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @foreach ($all as $sl=>$u)                          
                <tr>
                    <td>{{$sl+1}}</td>
                    <td>{{$u->name}}</td>
                    
                   
                    <td>
                        <a href="{{route('product.delete',$u->id)}}" class="btn btn-danger">DELETE</a>
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