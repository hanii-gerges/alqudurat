@extends('layouts.app')

@section('content')
<div>
    <div>
        <form action="/categories" method="post">
            @csrf
            @if (count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif
        
            <div class="form-group row">
                <label class="col-2" for="name">Category Name: </label>
                <input type="text" class="form-control col-10" name="name" placeholder="Category Name">
            </div>
            <div class="form-group row">
                <label class="col-2" for="description">Category Content: </label>
                <div class="col-10">
                    <textarea class="form-control col-10" id="ckeditor" name="description" cols="30" rows="10" placeholder="Category Content"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2" for="image">Image: </label>
                <input class="form-control-file col-10" type="file">
            </div>
            <div class="row justify-content-end">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
@endsection