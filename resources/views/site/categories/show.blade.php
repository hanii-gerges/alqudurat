@extends('site.layout')

@section('content')
<div class="container">
  <div class="row">
  <ol class="breadcrumb text-center text-lg-right" style="margin-top:100px;">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/categories">Products & Services</a></li>
      <li class="breadcrumb-item" aria-current="page"><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></li>
      {{--  <li class="breadcrumb-item"><a href=""></a></li>  --}}
  </ol>
  </div>
  <div class="row" style="margin-bottom:70px;">
    <div class="col-12 mb-3" style="padding-left:0px;">
      <h2 class="text-left">{{$category->name}}</h2>
    </div>

        <div class="col-md-6" style="padding-left:0%;">
          @if($category->getFirstMedia())
            <img src="{{ $category->getFirstMedia()->getUrl() }}" alt="Category Image">
          @else
            <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" alt="Category Image">

          @endif
        </div>

        <div class="col-md-6">
            <p class="text-left">{!! $category->description !!}</p>

        </div>

    </div>

@if($category->content !== null)
    <div class="row mx-auto w-75">
      <div class="col cybercontent">
        {!! $category->content !!}
      </div>
    </div>
@endif
@if($products->count() > 0)
    @if ($products->first()->getMedia()->first())
    <div class="row mt-5 justify-content-center">
    @foreach ($products as $product)
     <div class="col-md-6 col-xl-4">
         <div class="card  " style="width: 23rem;" style="border-radius:0%;">
          <img src="{{ $product->getFirstMedia()->getUrl() }}" alt="Product Image" style="height: 220px; max-heigt:220px;">
          <div class="card-body" style="padding: 5px; background-color: #EBF0F5">
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

@else
<div class="row mb-5">
    @foreach ($products as $product)
    <div class="col-6">
              <div class="card border border-secondary" style="background:#EBF0F5;">
                {{-- <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <h5 class="card-title text-center">{{$product->title}}</h5>
                </div>
              </div><br>
    </div>
    @endforeach
</div>



@endif
@endif

</div>

@endsection


{{-- <div class="card border border-secondary rounded" style="background:#ecf0f1;">
                <div class="card-body">
                  <h3 class="card-title text-center">building-technology</h3>
                </div>
              </div> --}}
