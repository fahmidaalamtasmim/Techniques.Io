@extends('layouts.adminDashboard')
@section('content')

<div class="container">
<div class="row">
    <div class="col-lg-6 ">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Website link</h4>
              
              <form class="forms-sample" method="POST" action="{{route('add.website')}}">
                @csrf

                <div class="form-group">
                  <input type="text" class="form-control" name="website">
                </div>


                    @error('website')
                    <strong class="text-danger">{{$message}}</strong>  
                    @enderror


                <button type="submit" class="btn btn-primary mr-2">Add website</button>
                    
              </form>
            </div>
            </div>
          </div>


         {{-- table --}}
          <div class="col-lg-6 my-2 ">
              <div class="card">
                   <div class="card-body">
                       <h4 class="card-title">Website list</h4>
                          <div class="table-responsive">
                            <table class="table table-hover">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Website</th>
                  {{-- <th>Action</th> --}}
                </tr>
              </thead>

              <tbody>

                @foreach ($website as $sl=>$u)                          
                <tr>
                    <td>{{$sl+1}}</td>
                    <td>{{$u->website}}</td>
                    
                   
                    {{-- <td>
                        <a href="{{route('product.delete',$u->id)}}" class="btn btn-danger">DELETE</a>
                    </td> --}}
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
          </div>
          </div>
          </div>

        </div>
    </div>


@endsection