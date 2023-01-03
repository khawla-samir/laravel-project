@extends('layouts.main_layout')
@include('includes.header')
<!-- nav section -->

@include('includes.navBar')

<!-- end nav section -->
  @section('pageContent')
<body class="sub_page">
  

  <div class="row">
    @foreach ($errors->all() as $msg)
            <div class="col-12">
                <div class="alert alert-danger">{{ $msg }}</div>
            </div>
    @endforeach 
</div>
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              Request A call back
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
            <form action="/newUser" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Full Name" name="name"/>
                  </div>
                  <div>
                    <input type="email" placeholder="Email" name="email"/>
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" name="phone"/>
                  </div>
                  <div>
                    <input type="text" class="message_input" placeholder="Message" name="msg"/>
                  </div>
                  <div>
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 px-0">
            <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  @include('includes.footerCont')


  @stop
