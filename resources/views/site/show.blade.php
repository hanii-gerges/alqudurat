@extends('site.layout')

@section('content')
<div class="container">
    <div class="row" style="margin-top:150px;margin-bottom:50px;">

        <div class="col-md-6">
          @if($category->getFirstMedia())
            <img src="{{ $category->getFirstMedia()->getUrl() }}" alt="Category Image">
          @else
            <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" alt="Category Image">

          @endif
        </div>

        <div class="col-md-6">
            <h2 class="text-left">{{$category->name}}</h2>
            <p class="text-left">{!! $category->description !!}</p>

        </div>

    </div>
    <hr class="border border-secondary">

@if($category->content !== null)
    <div class="row">
      <div class="col">
        {!! $category->content !!}
      </div>
    </div>
@endif
@if($products->count() > 0)
    @if ($products->first()->getMedia()->first())
    <div class="row">
    @foreach ($products as $product)
     <div class="col-md-4">
         <div class="card border border-dark" style="width: 18rem;">
             {{ $product->getMedia()->first() }}
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
