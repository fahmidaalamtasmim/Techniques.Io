@extends('layouts.adminDashboard')
@section('content')

<div class="container">
  @if (session('err'))
    <div><strong>{{session('err')}}</strong></div>
@endif
  @if (session('cam'))
    <div class="alert alert-danger"><strong>{{session('cam')}}</strong></div>
@endif
  @if (session('pho'))
    <div class="alert alert-danger"><strong>{{session('cam')}}</strong></div>
@endif
  @if (session('e'))
    <div class="alert alert-danger"><strong>{{session('e')}}</strong></div>
@endif



    <div class="row">
        <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
              <div class="card-body m-auto" >
                <div class="pb-3">
                    <h4 class="card-title text-center">Scrape website</h4>
                </div>

          <form action="{{route('s')}}" method="POST">
                  @csrf
               <div class="row">
                <div class="mx-3">
                  <select class="js-example-basic-single" style="width:100%" name="website_id">



                    <option style="background: black;color:rgb(230, 240, 237);" value="AL">--Select website--</option>
                   

                    @foreach ($website as $w )
                    <option style="background: black;color:rgb(230, 240, 237);" value="{{$w->id}}">{{$w->website}}</option>
                    @endforeach
                  
                  </select>
                  </div>
  
                  @error('website_id')
   <span class="text-danger">{{$message}}</span>
@enderror
                  {{-- @error('website_id')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror --}}
                  {{-- @error('website_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                 @enderror --}}

                  {{-- ////// category --}}
                  <div class="mx-3">
                  <select class="js-example-basic-single" style="width:100%" name="category_id">

                  

                    <option style="background: black;color:rgb(230, 240, 237);" value="AL">--Select Category--</option>

                    @foreach ($category as $c )
                    <option style="background: black;color:rgb(230, 240, 237);" value="{{$c->id}}">{{$c->name}}</option> 
                    @endforeach


                  </select>
                  
                </div>

                {{-- @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror --}}
               @error('category_id')
   <span class="text-danger">{{$message}}</span>
@enderror
               

                <div class="mx-3">
                   <button type="submit" name="btn_submit" value="1" class="btn-inverse-info btn-block">Scrape</button>
                  </div>
                <div class="mx-3">
                   <button name="btn_refresh" value="2" type="submit" class="btn btn-inverse-info btn-icon"><i class="mdi mdi-refresh"></i></button>
                  </div>
                </div>
            </form>
               
              </div>
            </div>
          </div>

     {{-- table starts --}}
     <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Product Table</h4>
         
          <div class="table-responsive">
            <table class="table table-striped" style="display:block; overflow-y:auto;max-height:500px;">
              <thead>
                <tr>
                  <th> Image </th>
                  <th> Name </th>
                  <th> Price </th>
                  <th> Description </th>
                  <th> Action </th>
                 
                </tr>
              </thead>
              <tbody>
                
                @foreach ($cam as $c)
                <tr>
                  <td class="py-1">
                    <img src="{{$c->photo}}" alt="image" />
                  </td>
                  <td class="py-1">
                   <p>{{$c->name}}</p>
                  </td>
                  <td class="py-1">
                   <p>{{$c->price}}</p>
                  </td>
                  <td class="py-1">
                   <p>{{substr($c->name,0,10)}}</p>
                  </td>
                <td><a href="{{route('camera.delete',$c->id)}}" class="btn btn-danger"><i class="mdi mdi-delete-forever"></i></a></td>

                  {{-- <td><a href="{{route(camera.refresh)}}" class="btn btn-info"><i class="mdi mdi-refresh"></i></a></td> --}}

                  {{-- <td><a href="" class="btn btn-info"><i class="mdi mdi-toggle-switch"></i></a></td> --}}
                  {{-- <i class="mdi mdi-toggle-switch-off"></i> --}}

                  <td>
                    <a href="{{route('cp',$c->id)}}" class="btn btn-{{$c->cc==1?'success':'danger'}}">{{$c->cc==1?'Approved':'Pending'}}</a>
                  </td>
                </tr>

                @endforeach





                @foreach ($pho as $p)
                <tr>
                  <td class="py-1">
                    <img src="{{$p->photo}}" alt="image" />
                  </td>
                  <td class="py-1">
                   <p>{{$p->name}}</p>
                  </td>
                  <td class="py-1">
                   <p>{{$p->price}}</p>
                  </td>
                  <td class="py-1">
                   <p>{{substr($p->name,0,10)}}</p>
                  </td>
                  <td><a href="{{route('phone.delete',$p->id)}}" class="btn btn-danger"><i class="mdi mdi-delete-forever"></i></a></td>

                  {{-- <td><a href="{{route('phone.refresh')}}" class="btn btn-info"><i class="mdi mdi-refresh"></i></a></td> --}}

                  <td><a href="{{route('pp',$p->id)}}" class="btn btn-{{$p->pp==1?'success':'danger'}}">{{$p->pp==1?'Approved':'Pending'}}</a></td>
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