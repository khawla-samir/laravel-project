@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              
                <li class="nav-item">
                  <a class="nav-link" href="/showFruit">Show fruit </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/showUsers">Show users </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/showCustomers">Show testimonials</a>
                </li>
            
              </ul>
              <div>
                <a class="btn btn-primary mg-b-20" href="/index">Go to public site</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

@stop
