@extends('layouts.app')

@section('content')
 <div class="row">
     <div class="col-12">
      @if (count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
  
  
     </div>

    <div class="col-12">
        <table class="table">
            
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        @if($product->getMedia()->first())
{{-- //////////////////////////////////////////make sure .env APP_URL is empty////////////////////////////////////////////// --}}
                            <td><img src="{{ $product->getFirstMedia()->getUrl('thumb') }}"></td>
                        @else
                            <td></td>
                        @endif
                        <td>{{ $product->title }}</td>
                        <td style="display:block;height: 100px;overflow-y: hidden ;text-overflow: ellipsis;">{{ $product->description }}</td>
                        <td>
                            <a href="/products/edit/{{ $product->id }}"><button class="btn btn-info">update</button></a>
                            <form action="/products/{{ $product->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" id="delete-btn" value="Delete">
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
          </table>
    </div>
  </div>

@endsection