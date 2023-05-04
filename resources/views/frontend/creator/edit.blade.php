@extends('frontend.creator.creatorDashboard')
@section('content')

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit information</h4>
              
              <form class="forms-sample" method="POST" action="{{route('update')}}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" value="{{Auth::guard('creator')->user()->name}}" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="{{Auth::guard('creator')->user()->email}}" name="email">
                </div>

                <button type="submit" class="btn btn-primary mr-2">Update profile</button>
              
              </form>
            </div>
            </div>
          </div>



          {{-- /////////////////////////////// --}}
          
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Password</h4>

                @if (session('wrong'))
                <strong class="text-danger"> {{session('wrong')}}</strong>
                @endif
                @if (session('s'))
                <strong class="text-danger"> {{session('s')}}</strong>
                @endif
                
                  <form class="forms-sample" method="POST"  action="{{route('password')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Old password</label>
                      <input type="password" class="form-control" id="exampleInputUsername1" name="old_password" placeholder="Username">
                    </div>
                      {{-- error show --}}
                      @error('old_password')
                        <strong class="text-danger"> {{$message}}</strong>
                       @enderror
                      {{-- error show --}}

                    <div class="form-group">
                      <label for="exampleInputEmail1">New Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder=" New Password">
                    </div>
                           {{-- error show --}}
                               @error('password')
                                <strong class="text-danger"> {{$message}}</strong>
                                @enderror
                            {{-- error show --}}

                    <div class="form-group">
                      <label for="exampleInputPassword1">Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder=" Confirm Password">
                    </div>
                    {{-- error show --}}
                    @error('password_confirmation')
                    <strong class="text-danger"> {{$message}}</strong>
                    @enderror
                    {{-- error show --}}
                    
                    <button type="submit" class="btn btn-primary mr-2">Update password</button>
                 
                  </form>
                </div>
              </div>
            </div>



            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Profile Picture</h4>
                  @if (session('p'))
                <strong class="text-success"> {{session('p')}}</strong>
                @endif
                
                  <form class="forms-sample" method="POST" action="{{route('photo')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Upload Photo</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" name="photo" 
                        onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        
                        @error('photo')
                          <strong class="text-danger">{{$message}}</strong>  
                        @enderror
                      </div>
                      <div class="my-2">
                        <img width="200" src="" id="blah" alt="">
                      </div>
                    </div>
                  
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    
                  </form>
                </div>
              </div>
           
           
            </div>


            </div>
            
   


@endsection