<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
{{-- ///////////// --}}
<link rel="stylesheet" href="{{asset('compare/css/reset.css')}}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{asset('compare/css/style.css')}}"> <!-- Resource style -->
	<script src="{{asset('compare/js/modernizr.js')}}"></script> <!-- Modernizr -->
{{-- ///////////// --}}

</head>
<body>
    <div class="container">
        <div class="col-md-auto">
            <div class="div">

                {{-- <div class="container pt-5">
                    <div class="row">
                        <div class="col-lg-12">
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="col-lg-8">
                                
                                                <form action="" method="GET" class=".form-control-lg">
                                                    @csrf
                                                    <div class="form-group">
                                                    <div class="col-md-4">
                                                        <select name="one" class="ccc form-control form-control-lg" >
                                                            <option value="">--Select--</option>
                                                            @foreach ($all as $a)
                                                                <option value="{{$a->name}}">{{$a->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="form-group">
                                                    <div class="col-md-4">
                                                        <select name="two" class="ppp form-control form-control-lg">
                                                            <option value="">--Select--</option>
                                                            @foreach ($all as $a)
                                                                <option value="{{$a->name}}">{{$a->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    </div>
                                
                                                  
                                                        <button name="btn" value="1" type="submit">Submit</button>
                                                    
                                
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                        </div>
                    </div>
                
                </div> --}}

{{-- 
                <br>
                <div class="container">
                <div class="row">
                
                    <div class="col-sm-5 m-auto">
                    <div class="card">
                    <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($mix1 as $m1)
                          <tr>
                            
                            <td> <img src="{{$m1->photo}}" alt=""></td>
                            <td>{{$m1->name}}</td>
                            <td>{{$m1->price}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                   </div>
                   </div>
                   </div>
                
                 
                  
                  
                   <div class="col-sm-5">
                <div class="card">
                    <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($mix2 as $m2)
                          <tr>
                            
                            <td> <img src="{{$m2->photo}}" alt=""></td>
                            <td>{{$m2->name}}</td>
                            <td>{{$m2->price}}</td>
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
            </div>
        </div>
    </div> --}}



   {{-- <div>
   @foreach ($mix1 as $m1)
       <img src="{{$m1->photo}}" alt="">
       <p>{{$m1->name}}</p>
       <p>{{$m1->price}}</p>
       <p>{{$m1->short_desp}}</p>
   @endforeach
   @foreach ($mix2 as $m1)
       <img src="{{$m1->photo}}" alt="">
       <p>{{$m1->name}}</p>
       <p>{{$m1->price}}</p>
       <p>{{$m1->short_desp}}</p>
   @endforeach
   </div> --}}

{{-- ////////////////////////////////////////// --}}
   <div class="card">

<section class="cd-intro">
    <h1>Products Comparison Table</h1>
</section> <!-- .cd-intro -->

<section class="cd-products-comparison-table">
    <header>
        {{-- <h2>Compare Models</h2> --}}

        <div class="actions">
            <a href="#0" class="reset">Reset</a>
            <a href="#0" class="filter">Filter</a>
        </div>
    </header>

    <div class="cd-products-table">
        <div class="features">
            <div class="top-info">Image</div>
            <ul class="cd-features-list">
                <li>Name</li><br>
                <li>Price</li>
                <li>Short Description</li><br>
            </ul>
            </div> 
        <div class="cd-products-wrapper">
            <ul class="cd-products-columns">
                @foreach ($all as $a )
                <li class="product">  
                    <div class="top-info">
                        <div class="check"></div>
                        <img src="{{$a->photo}}" alt="product image">
                    </div> 

                    <ul class="cd-features-list">
                        <li><h3>{{$a->name}}</h3></li>
                        <li>{{$a->price}}</li>
                        <li>{{$a->short_desp}}</li>
                    </ul>
                </li> 
                
                
                @endforeach
            </ul> 
        </div> 
      
        {{-- <ul class="cd-table-navigation">
            <li><a href="#0" class="prev inactive">Prev</a></li>
            <li><a href="#0" class="next">Next</a></li>
        </ul> --}}


    </div> 
</section> 
</div>


<script src="{{asset('compare/js/jquery-2.1.4.js')}}"></script>
<script src="{{asset('compare/js/main.js')}}"></script> <!-- Resource jQuery -->


{{-- /////////////////////////////////////////// --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
            $('.ccc').select2();
        });
        </script>
        <script>
            $(document).ready(function() {
            $('.ppp').select2();
        });
        </script>



</body>

</html>