@extends('layouts.main_layout')
@include('includes.header')

@include('includes.navBar')
  @section('pageContent')

  <div>
     @foreach($fruits as $fruit)
      
    <div class="box" style="margin-inline:35%; margin-top: 5%; align-items: center; ">
        <img src="{{URL::asset($fruit->img)}}" style="height: fit-content; width:fit-content; " alt="{{$fruit->name}}">
        <div class="link_box">
          <h4 style="font-size: 30px; margin-top: 5%;" >
            {{$fruit->name}}
          </h4>
          <a href="#" style="font-size: 20px;">
            Buy Now
          </a>
        </div>
      </div> 
    @endforeach 
  </div>

@stop