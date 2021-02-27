@extends('site.layout')

@section('content')
<div class="container">
    <div class="row" style="margin-top:150px;margin-bottom:50px;">

        <div class="col-md-6">
            <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" alt="Category Image">

        </div>

        <div class="col-md-6">
            <h2>{{$category->name}}</h2>
            <p class="text-justify">{{$category->description}}</p>

        </div>

    </div>
    <hr class="border border-secondary">


    @if ($photo == 1)
    <div class="row">
    @foreach ($products as $product)
     <div class="col-md-4">
         <div class="card border border-dark" style="width: 18rem;">
             <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title text-center">{{$product->title}}</h5>
              <center>
                 <div class="cube-button">
                     <a class="btn button btn-rounded btn-light-blue btn-hvr-light-blue" href="{{route('product',$product->id)}}">
                        Learn
                        More
                        <div class="btn-hvr-setting">
                           <ul class="btn-hvr-setting-inner">
                              <li class="btn-hvr-effect"></li>
                              <li class="btn-hvr-effect"></li>
                              <li class="btn-hvr-effect"></li>
                              <li class="btn-hvr-effect"></li>
                           </ul>
                        </div>
                     </a>
                  </div>
             </center>
             </div>
           </div><br>

     </div>

    @endforeach

</div>

@elseif($photo == 0)
<div class="row mb-5">
    @foreach ($products as $product)
    <div class="col-6">
              <div class="card border border-secondary" style="background:#bdc3c7;">
                {{-- <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <h5 class="card-title text-center">{{$product->title}}</h5>
                </div>
              </div><br>
    </div>
    @endforeach
</div>

@else


@endif




</div>

@endsection


{{-- <div class="card border border-secondary rounded" style="background:#ecf0f1;">
                <div class="card-body">
                  <h3 class="card-title text-center">building-technology</h3>
                </div>
              </div> --}}
