@extends('frontend.techniques')
@section('content')


<div class="main-wrapper ">
    <section class="page-title bg-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block text-center">
              <span class="text-white">News details</span>
              <h1 class="text-capitalize mb-4 text-lg">Blog Single</h1>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
        <div class="col-lg-12 mb-5">
            <div class="single-blog-item">
                <img width="400" src="{{asset('uploads/topic')}}/{{$ttt->photo}}" alt="" class="img-fluid rounded">
    
                <div class="blog-item-content bg-white p-5">
                    <div class="blog-item-meta bg-gray py-1 px-2">
                        <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i></span>
                        <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i></span>
                        <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i></span>
                    </div> 
    
                    <h2 class="mt-3 mb-4"><a href="#">{{$ttt->name}}</a></h2>
                    <p class="lead mb-4">{{$ttt->desp}}</p>
    
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam voluptate in beatae.</p> --}}
    
                    {{-- <h3 class="quote">A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.</h3> --}}
                    
                    {{-- <p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically.</p> --}}
{{--     
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat tenetur incidunt quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem eos animi laborum iusto expedita sapiente.</p> --}}
{{--     
                    <div class="tag-option mt-5 clearfix">
                        <ul class="float-left list-inline"> 
                            <li>Tags:</li> 
                            <li class="list-inline-item"><a href="#" rel="tag">Advancher</a></li>
                            <li class="list-inline-item"><a href="#" rel="tag">Landscape</a></li>
                            <li class="list-inline-item"><a href="#" rel="tag">Travel</a></li>
                           </ul>        
    
                        <ul class="float-right list-inline">
                            <li class="list-inline-item"> Share: </li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> --}}





                </div>
            </div>
        </div>
    
    
       
    
        <div class="col-lg-12 mb-5">
            <div class="comment-area card border-0 p-5">
                <h4 class="mb-4">{{$total}} Comments</h4>
                <ul class="comment-tree list-unstyled">
                    @foreach ($ccc as $c)
                        
                   
                    <li class="mb-5">

                        <div class="comment-area-box">
                            {{-- <img alt="" src="images/blog/test1.jpg" class="img-fluid float-left mr-3 mt-2"> --}}
    
                            <h5 class="mb-1">{{$c->name}}</h5>
                            <span>{{$c->email}}</span>
    
                            <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
                                <a href="#"><i class="icofont-reply mr-2 text-muted"></i>|</a>
                                <span class="date-comm">{{$c->created_at->diffForHumans()}}</span>
                            </div>
    
                            <div class="comment-content mt-3">
                                <p>{{$c->comment}}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
    

        <div class="col-lg-12">
            <form class="contact-form bg-white rounded p-5" id="comment-form" 
            method="POST" action="{{route('comment')}}">
            @csrf
                <h4 class="mb-4">Write a comment</h4>
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="mail" placeholder="Email:">
                        </div>
                    </div>
                </div>
    
    
                <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>
    
                <button class="btn btn-main btn-round-full" type="submit">Add</button>
            </form>



        </div>
    </div>
</div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap">
    <form action="{{route('search')}}" method="POST">
            @csrf
        <div class="sidebar-widget search card p-4 mb-3 border-0">
            <input type="text" class="form-control" name="search" placeholder="search" >
            <button class="btn btn-mian btn-small d-block mt-2">search</button>
        </div> 
       </form>
        {{-- <div class="sidebar-widget card border-0 mb-3">
            <img src="images/blog/blog-author.jpg" alt="" class="img-fluid">
            <div class="card-body p-4 text-center">
                <h5 class="mb-0 mt-4">Arther Conal</h5>
                <p>Digital Marketer</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>
    
                <ul class="list-inline author-socials">
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-twitter text-muted"></i></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-pinterest text-muted"></i></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#"><i class="fab fa-behance text-muted"></i></a>
                    </li>
                </ul>
            </div>
        </div> --}}
    
        <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
            <h5>Latest Posts</h5>
    @foreach ($topic as $tt)
        
    <div class="media border-bottom py-3">
        <a href="{{route('blogsingle',$tt->id)}}"><img class="mr-4" width="100" src="{{asset('uploads/topic')}}/{{$tt->photo}}" alt=""></a>
        <div class="media-body">
            <h6 class="my-2"><a href="{{route('blogsingle',$tt->id)}}">{{$tt->name}}</a></h6>
            <span class="text-sm text-muted">{{$tt->created_at->diffForHumans()}}</span>
        </div>
    </div>
    @endforeach
    
           
    
            
        </div>
    
        <div class="sidebar-widget bg-white rounded tags p-4 mb-3">
            <h5 class="mb-4">Categories</h5>
            @foreach ($cat as $c)
            <a href="{{route('cat',$c->id)}}">{{$c->category_name}}</a>  
            @endforeach
            
        </div>
    </div>
                </div>   
            </div>
        </div>
    </section>

@endsection