@extends('site.layout')

@section('content')

<div class="container">
    <div class="row" style="margin-top:150px;margin-bottom:50px;">
        <div class="col-md-6">
            <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" alt="Category Image">
        </div>
        <div class="col-md-6">
            <h2>{{$product->title}}</h2>
            <p class="text-justify">{{$product->description}}</p>
        </div>
    </div>
    <hr class="border border-secondary">

{{-- @foreach ($product as $x)
<div class="col-md-4">
    <div class="card border border-dark" style="width: 18rem;">
        <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Test</h5>
         <center>
            <div class="cube-button">
                <a class="btn button btn-rounded btn-light-blue btn-hvr-light-blue" href="#">
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
@endforeach --}}





</div>
</div>


@endsection
