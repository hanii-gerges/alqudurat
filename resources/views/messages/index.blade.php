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
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    
                    <tr>
                        <th scope="row">{{ $message->id }}</th>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td style="display:block;height: 100px;overflow-y: hidden ;text-overflow: ellipsis;">{{ $message->message }}</td>
                        <td>
                            <a href="/messages/{{ $message->id }}"><input type="button" class="btn btn-primary" id="show" value="Show"></a>
                            <form action="/messages/{{ $message->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" id="delete-btn" value="Delete">
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
          </table>
          {{ $messages->links() }}
    </div>
  </div>

@endsection