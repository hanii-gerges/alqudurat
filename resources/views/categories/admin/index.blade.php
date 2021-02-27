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
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        @if($category->getMedia()->first())
{{-- //////////////////////////////////////////make sure .env APP_URL is empty////////////////////////////////////////////// --}}
                            <td><img src="{{ $category->getFirstMedia()->getUrl('thumb') }}"></td>
                        @else
                            <td></td>
                        @endif                        
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="/categories/edit/{{ $category->id }}"><button class="btn btn-info">update</button></a>
                            <form action="/categories/{{ $category->id }}" method="POST">
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