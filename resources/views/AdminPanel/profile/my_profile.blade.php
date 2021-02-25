@extends('dashboard')

@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Basic Form Controls</h2>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Current Password</label>
                    <input type="password" class="form-control"  placeholder="Current Password">
                    {{-- <span class="mt-2 d-block text-danger">We'll never share your email with anyone else.</span> --}}
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control" placeholder="New Password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Change Password</button>
                    {{-- <button type="submit" class="btn btn-secondary btn-default">Cancel</button> --}}
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
