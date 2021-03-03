@extends('site.layout')

@section('content')

<div class="container">
  <div class="row mx-auto">
    <ol class="breadcrumb text-center text-lg-right" style="margin-top:100px;">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/categories">Products & Services</a></li>
        <li class="breadcrumb-item"><a href="/categories/{{ $product->category->id }}">{{ $product->category->name }}</a></li>
        <li class="breadcrumb-item"><a href="/product/{{ $product->id }}">{{ $product->title }}</a></li>
    </ol>
  </div>
    <div class="row mx-auto" style="margin-bottom:70px;">
      <div class="col-12 mb-3" style="padding-left:0px;">
        <h2 class="text-left">{{$product->title}}</h2>
      </div>
  
        <div class="col-md-6" style="padding-left:0%;">
            @if($product->getFirstMedia())
            <img src="{{ $product->getFirstMedia()->getUrl() }}" alt="Product Image">
          @else
            <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" alt="Product Image">
          @endif
        </div>
        <div class="col-md-6">
            <p class="text-left">{!! $product->description !!}</p>
        </div>
    </div>

    @if($product->content !== null)
    <div class="row">
      <div class="col">
        {!! $product->content !!}
      </div>
    </div>
@endif
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
