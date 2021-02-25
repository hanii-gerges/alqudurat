@extends('layouts.app')

@section('content')
<div>
    <div>
        <form action="/products" method="post" enctype="multipart/form-data">
            @csrf
            @if (count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif

            <div class="form-group row">
                <label class="col-2" for="category_id">Category: </label>
                <select class="form-control col-4" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">
                <label class="col-2" for="title">Product Title: </label>
                <input type="text" class="form-control col-10" name="title" placeholder="Product Title">
            </div>
            <div class="form-group row">
                <label class="col-2" for="description">Product Content: </label>
                <div class="col-10">
                    <textarea class="form-control col-10" id="ckeditor" name="description" cols="30" rows="10" placeholder="Product Content"></textarea>
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
</div>
@endsection