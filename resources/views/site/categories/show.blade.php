@extends('site.layout')

@section('content')
<div class="container">
  <div class="row" style="padding-left: 15px;">
  <ol class="breadcrumb text-center text-lg-right" style="margin-top:100px;">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/categories">Products & Services</a></li>
      <li class="breadcrumb-item" aria-current="page"><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></li>
      {{--  <li class="breadcrumb-item"><a href=""></a></li>  --}}
  </ol>
  </div>
  <div class="row" style="margin-bottom:70px;">
    <div class="col-12 mb-3">
      <h2 class="text-left">{{$category->name}}</h2>
    </div>

        <div class="col-md-6">
          @if($category->getFirstMedia())
            <img src="{{ $category->getFirstMedia()->getUrl() }}" alt="Category Image">
          @else
            {{--  <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" alt="Category Image">  --}}

          @endif
        </div>

        <div class="col-md-6">
            <p class="text-left">{!! $category->description !!}</p>

        </div>

    </div>


@if($products->count() > 0)
    <div class="row mt-5 justify-content-center">
    @foreach ($products as $product)
     <div class="col-md-6 col-xl-4">
         <div class="card" style="width: 23rem;border-radius:0%; height: 310px">
          @if($product->getFirstMedia())
          <img src="{{ $product->getFirstMedia()->getUrl() }}" alt="Category Image" style="height: 220px; max-height: 220px; overflow:hidden;">
       @else
          <img src="{{asset('front-end\classic-business\categories\DefaultCategory.jpeg')}}" style="height: 220px; max-height: 220px; overflow:hidden;" alt="...">
       @endif
          <div class="card-body" style="padding: 5px; background-color: #EBF0F5">
               @if($product->description != '')
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
             @else
             <h5 class="card-title text-center my-3">{{$product->title}}</h5>
             @endif

             </div>
           </div><br>

     </div>

@endforeach
</div>

@endif

@if($category->content !== null)
    <div class="row justify-content-center">
      <div class="col col-md-8 cybercontent">
        {!! $category->content !!}
      </div>
    </div>
@endif
</div>

@endsection


{{-- <div class="card border border-secondary rounded" style="background:#ecf0f1;">
                <div class="card-body">
                  <h3 class="card-title text-center">building-technology</h3>
                </div>
              </div> --}}
