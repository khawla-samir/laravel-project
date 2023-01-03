@extends('layouts.main_layout')
@include('includes.header')
<!-- nav section -->

@include('includes.navBar')
  @section('pageContent')


<body class="sub_page">


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2 style="color: chocolate;">
          What Syas Cutomer 
        </h2>
        <hr>
      </div>
      @foreach ($customers as $customer)
          
            <div style="margin-block:20px; flex: auto; margin-inline: 40%; ">
              <div>
                <img src="{{URL::asset($customer->img)}}" style="height: 200px; width:200px;" alt="">
              </div>
              <div class="detail-box">
                <h1 style="color: rgb(29, 105, 81);">
                 {{$customer->name}}
                </h1>
                <h5 style="color:cadetblue;">{{$customer->name}}’s Message:</h5>
                <p>  
                 "{{$customer->msg}}"
                </p>
              </div>  
              @endforeach
              <div>
                {{$customers->links()}}
              </div>          
            </div>
         
         

   <!--   <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/client-img.png" alt="" name="img">
              </div>
              <div class="detail-box">
                <h5>
                  Jone Mark
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Lorem ipsum dolor sit amet,
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/client-img.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Jone Mark
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Lorem ipsum dolor sit amet,
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                </p>
              </div>
            </div>
          </div>
          {{-- @foreach ($customers as $customer) --}}
          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="{{URL::asset($customer->img)}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  ($customer->name)
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    ($customer->name) Message
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  ($customer->msg)
                </p>
              </div>
            </div>
          </div>
          {{-- @endforeach --}}
          <div>
            {{-- {{$customers->links()}} --}}
          </div>
        </div>
 <!--       <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      
      </div>-->

    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->

  

  <!-- end info section -->
  @include('includes.footerCont')
@stop