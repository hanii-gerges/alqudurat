@extends('site.layout')

@section('content')
<div class="container">
   <div class="row" style="padding-left: 15px;">
   <ol class="breadcrumb text-center text-lg-right" style="margin-top:100px;">
       <li class="breadcrumb-item"><a href="/">Home</a></li>
       <li class="breadcrumb-item"><a href="/categories">Products & Services</a></li>
   </ol>
</div>
    <div class="row" style="margin-bottom:50px;">
       <h1 class="col-12 mb-5">Products & Services</h1>
        @foreach ($categories as $cat)
        <div class="col-md-6 col-xl-4">
            <div class="card  " style="width: 23rem; border-radius:0%;">
               @if($cat->getFirstMedia())
                  <img src="{{ $cat->getFirstMedia()->getUrl() }}" alt="Category Image" style="height: 220px; max-height: 220px; overflow:hidden;">
               @else
                  <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" style="height: 220px; max-height: 220px; overflow:hidden;" alt="...">
               @endif
                <div class="card-body" style="padding: 5px; background-color: #EBF0F5">
                  <h5 class="card-title text-center">{{$cat->name}}</h5>
                 <center>
                    <div class="cube-button">
                        <a class="btn button btn-rounded btn-light-blue btn-hvr-light-blue" href="{{route('category',$cat->id)}}">
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
</div>

@endsection
