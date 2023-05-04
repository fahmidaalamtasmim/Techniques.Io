@extends('layouts.adminDashboard')
@section('content')


@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Topic List</h4>
      
        <div class="table-responsive">
          <table class="table table-dark">
            <thead>
              <tr>
                
               
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Photo</th>
                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($topic as $t)
                    
                <tr>
                    <td>{{$t->name}}</td>
                    <td>{{$t->rel_to_category->category_name}}</td>
                    <td>{{substr($t->desp,0,10)}}</td>
                    <td><img src="{{asset('uploads/topic')}}/{{$t->photo}}" alt=""></td>
                    {{-- <td> {{$t->status}}</td> --}}
                    <td>
                         <a type="submit" href="{{route('del',$t->id)}}" class="btn btn-danger">Delete</a>

                         {{-- <form action="{{route('ap',$t->id)}}">
                          <button type="submit"  class="btn btn-danger">approved</button>
                        </form> --}}


                         <a type="submit" href="{{route('ap',$t->id)}}" class="btn btn-{{($t->state==1)?'inverse-success':'danger'}}">{{($t->state==1)?'Approved':'pending'}}</a>

                         
                            
                          
                        
                        
                        
                        
                        </td>
                </tr>
                <tr>
                  @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
