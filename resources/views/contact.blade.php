@extends('site.layout')

@section('content')
<!-- CONTACT-SECTION START -->
<div class="contact-section" id="contact">
  <div class="container">
     <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms">
           <h2>Let&#39;s Get In Touch</h2>
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
  

           <form action="{{route('message.store')}}" method="POST" class="contact-form">
              @csrf
              <div class="row">
                 <div class="col-12" id="result"></div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                       <label>Name</label>
                       <input class="form-control" type="text" placeholder="Your Name" required  name="name">
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                       <label >Email</label>
                       <input class="form-control" type="email" placeholder="email@website.com" required  name="email">
                    </div>
                 </div>
                 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                       <label>Message</label>
                       <textarea class="form-control" placeholder="Write your message here"  name="message" rows="6" cols="50" required></textarea>
                    </div>
                 </div>
                  <button class="btn btn-outline-info btn-rounded" type="submit">Send</button>
              </div>
           </form>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="300ms">
           <div class="media">
              <i class="fas fa-map-marker-alt"></i>
              <div class="media-body">
                 <h5>OUR ADDRESS</h5>
                 <p>1234 Heaven Stress, Beverly Hill.</p>
              </div>
           </div>
           <div class="media">
              <i class="fas fa-phone"></i>
              <div class="media-body">
                 <h5>PHONE NUMBER</h5>
                 <p>Office: (800) 123 456 789 </p>
              </div>
           </div>
           <div class="media">
              <i class="far fa-envelope"></i>
              <div class="media-body">
                 <h5>EMAIL ADDRESS</h5>
                 <p>Email: email@website.com</p>
                 <p>Support: support@website.com</p>
              </div>
           </div>
        </div>
     </div>
     <!-- Container End -->
  </div>
</div>
<!-- CONTACT-SECTION END -->



@endsection