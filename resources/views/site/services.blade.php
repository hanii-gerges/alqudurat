@extends('site.layout')

@section('content')
<div class="container">
    <div class="row" style="margin-top:150px;margin-bottom:50px;">

        @foreach ($categories as $cat)
        <div class="col-md-4">
            <div class="card border border-dark" style="width: 18rem;">
               @if($cat->getFirstMedia())
                  <img src="{{ $cat->getFirstMedia()->getUrl() }}" alt="Category Image">
               @else
                  <img src="{{asset('front-end\classic-business\categories\building-technology.jpg')}}" class="card-img-top" alt="...">
               @endif
                <div class="card-body">
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
