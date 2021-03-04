@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $message->name }}">
              </div>
              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="email" value="{{ $message->email }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="message" class="col-sm-2 col-form-label">Message</label>
              <div class="col-sm-10">
                  <textarea class="form-control" readonly name="message" id="message" cols="50" rows="10">{{ $message->message }}</textarea>
              </div>
            </div>
          </form>
    </div>
</div>
@endsection