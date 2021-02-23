@extends('site.layout')

@section('content')
{{--
@php
$count = count($categories);
@endphp
@switch($type)
    @case($count < 6)
    <div class="container" style="height:600px;width:500;">
        <div class="row" style="margin-top:150px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

            </div><br>
        </div>
    </div>

        @break
    @case($count > 6 && $count <= 9)
    <div class="container" style="height:600px;width:500;">
        <div class="row" style="margin-top:150px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

            </div><br>
        </div>
    </div>

        @break

        @case($count > 9 && $count <= 12)
    <div class="container" style="height:1500px;width:500;">
        <div class="row" style="margin-top:150px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

            </div><br>
        </div>
    </div>

        @break

    @default
    <div class="container" style="height:500px;width:500;">
        <div class="row" style="margin-top:150px;">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>

            </div><br>
        </div>
    </div>


@endswitch --}}


<div class="container" style="height:2500px;width:1000;">

    <div class="row" style="margin-top:120px;">
        <div class="col-md-6">
            <img src="{{asset('img/Mobile Apps.jpg')}}" alt="">
        </div>

        <div class="col-md-6">
            <h1>Mobile Apps</h1>
            <h3>Here you'll find a selection of mobile apps for your tablet or smartphone:</h3>
            <small>Designed for: iPhone, iPad, Android</small>
        </div>


        <div class="col-md-12">
            <h1>SIMOTICS Digital Data</h1>
            <p class="lead">With the SIMOTICS Digital Data App - no matter where you are - you always have access to technical data, spare parts and the operating instructions for your SIMOTICS GP/SD motors. This means that we can provide you with an important part of the Digital Twin, allowing you to simplify and optimize your processes. You can obtain the electrical and mechanical data by simply scanning the data matrix code on the motor.</p>
            <small>Designed for: iPhone, iPad, Android, Windows Phone</small>
        </div>
    

        <br><br><br>
        <div class="col-md-12">
            <h1>SINAMICS SELECTOR</h1>
            <p class="lead">Siemens has developed the SINAMICS SELECTOR App as a practical tool for finding article numbers for your SINAMICS inverters in the output range from 0.12 kW to 560 kW (0.16 hp up to 700hp) quickly and easily. Whether for SINAMICS V20, SINAMICS G120C, SINAMICS G120P or SINAMICS G120: the app will provide you with the correct article numbers conveniently.</p>
            <small>Designed for: iPhone, iPad, Android</small>
        </div>


        <div class="col-md-12">
            <h1>Combi Valve Sizer</h1>
            <p class="lead">Valve and actuator selection and sizing
                Using the Combi Valve Sizer app from Siemens, it is very easy to select the right Acvatix combi valve and matching actuator. This way, the design of energy-efficient HVAC plants becomes very straightforward: Enter or get calculated the required maximum volumetric flow, select other features such as type of threaded connection, PN class or DN size – and the ideal type of combi valve will be displayed.
                </p>
        </div>


        <div class="col-md-12">
            <h1>HomeControl for Room automation</h1>
            <p class="lead">Simple control of HVAC, light, shading
                With the HomeControl app from Siemens, you have an intuitive and simple control for your heating, air conditioning and ventilation system, as well as light and shading control. The recent version contains a new and mobile operating philosophy available
                </p>
        </div>


        <div class="col-md-12">
            <h1>Scan to HIT</h1>
            <p class="lead">Get product information via QR
                Thanks to the Scan to HIT app you have the opportunity through a simple scan of the 2D code, which can be found on the product, to get information such as product or technical specifications. Furthermore you can download documentation as data sheets or installation instructions of the product. After a successful scan you will be redirected to HIT. HIT offers the following benefits:
                •	Access to more than hundred products
                •	Access to all documents of  the product
                •	You can save the product to your favorites

                </p>
        </div>


        <div class="col-md-12">
            <h1>HomeControl for Room automation</h1>
            <p class="lead">Simple control of HVAC, light, shading
                With the HomeControl app from Siemens, you have an intuitive and simple control for your heating, air conditioning and ventilation system, as well as light and shading control. The recent version contains a new and mobile operating philosophy available
                </p>
        </div>


        <div class="col-md-12">
            <h1>Desigo CC</h1>
            <p class="lead">Remote access to building automation and alarm management
                Desigo CC, the integrated building management platform of Siemens, offers mobile remote access to building automation and alarm management via a native mobile app. The Desigo CC app gives building managers complete mobility.
                </p>
        </div>


        <div class="col-md-12">
            <h1>ABT Go</h1>
            <p class="lead">ABT Go is the mobile tool for commissioning and maintenance tasks of Siemens devices used in building automation and control systems
                </p>
        </div>


        <div class="col-md-12">
            <h1>SIMATIC Mobile Apps</h1>
            <p class="lead">From the monitoring of distributed, mobile or expansive plants, all the way to digital maintenance tools for machines – the SIMATIC Mobile Apps can assist the user with a wide range of tasks in numerous industrial sectors. As well as providing secure access to the plant visualization, they also facilitate commissioning and maintenance tasks on site.
                </p>
        </div>





</div>

</div>


@endsection
