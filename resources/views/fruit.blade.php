@extends('layouts.main_layout')
@include('includes.header')

<!-- nav section -->
@include('includes.navBar')
<!-- end nav section -->
  @section('pageContent')

<body class="sub_page">


  <!-- fruit section -->
 
  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2 style="font-size: 50px; margin-left: 20%;">
          Fresh Fruit
        </h2>
      </div>
    </div>
    <div  style="margin-block:20px; flex: auto; margin-inline: 40%; ">
        @foreach($fruits as $fruit)
        <div class="box" >
          <img  style="height: 400px; width:400px; margin-top: 30px;" src="{{URL::asset($fruit->img)}}" alt="{{$fruit->name}}">
          <div class="link_box">
            <h5 style="font-size: 30px;">
             {{$fruit->name}}
            </h5>
            <a href="" style="font-size: 20px; margin-bottom: 30px;">
              Buy Now
            </a>
          </div>
          @endforeach
          <div>
            {{$fruits->links()}}
          </div>
        </div>
    </div>
  </section>

  <!-- end fruit section -->

 @stop