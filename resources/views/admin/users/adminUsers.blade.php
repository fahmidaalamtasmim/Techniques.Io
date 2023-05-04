@extends('layouts.adminDashboard')
@section('content')


<div class="container">

    <div class="card">
        <div class="card-body">
          <h4 class="card-title">User List</h4>
          <span class="float-end">Total :{{$total_users}}</span>

          @if (session('success'))
              <div class="alert alert-success">{{session('success')}}</div>
          @endif
         
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Photo</th>
                  <th>Created_at</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $sl=>$u)
                            
                <tr>
                    <td>{{$sl+1}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                      @if($u->photo == null)
                      <img src="{{ Avatar::create($u->name)->toBase64() }}">
                    @else
                    <img src="{{asset('uploads/adminuserphoto')}}/{{$u->photo}}" alt="">
                    @endif


                      
                    </td>
                    <td>{{$u->created_at->diffForHumans()}}</td>
                    <td>
                        <a href="{{route('admin.delete',$u->id)}}" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
</div>
@endsection