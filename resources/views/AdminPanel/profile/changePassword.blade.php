@extends('dashboard')

@section('content')
        <h3>Change Password</h3>
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
     
     
   
    <form class="mt-3" action="/changePassword" method='POST'>
        @csrf
        @method('put')

        <div class="form-group">
            <label class="" for="old">Old Password: </label>
            <input class="form-control" type="password" name="old">
        </div>
        <div class="form-group">
            <label class="" for="new">New Password: </label>
            <input class="form-control" type="password" name="new">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection