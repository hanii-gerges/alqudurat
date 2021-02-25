@extends('layouts.app')

@section('content')

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
    
 

    <div>
        <form action="/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group row">
                <label class="col-2" for="category_id">Category: </label>
                <select class="form-control col-4" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label class="col-2" for="title">product Title: </label>
                <input type="text" class="form-control col-10" name="title" placeholder="product Title" value="{{ $product->title }}">
            </div>
            <div class="form-group row">
                <label class="col-2" for="description">product Content: </label>
                <div class="col-10">
                <textarea class="form-control col-10" id="ckeditor" name="description" cols="30" rows="10" placeholder="product Content">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2" for="image">Image: </label>
                <input class="form-control-file col-10" type="file" name="image">
            </div>
            <div class="row justify-content-end">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection