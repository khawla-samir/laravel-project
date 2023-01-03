@extends('layouts.main_layout')

  @section('pageContent')
  <div class="row">
    @foreach ($errors->all() as $msg)
            <div class="col-12">
                <div class="alert alert-danger">{{ $msg }}</div>
            </div>
    @endforeach 
</div>
 <body>
    
  <!-- row -->
  <div class="row row-sm">
              <div class="modal-content modal-content-demo">
                  <div class="modal-header">
                      <h2 class="modal-title">Edit</h>
                  </div>
                  <div class="modal-body">
                      <form action="/updateCustomer/{{$customer->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <div class="form-group">
                              <label for="exampleInputEmail1">Customer Name</label>
                              <input type="text" class="form-control" id="name" value="{{$customer->name}}" name="name">
                          </div>

                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Customer Image</label>
                              <div class="col-sm-12 col-md-12">
                                  <input type="file" name="img"
                                         data-height="70" />
                              </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Message</label>
                            <input type="text" class="form-control" id="name" value="{{$customer->msg}}" name="msg">
                        </div>

                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Edit</button>
                          </div>
                      </form>
                      <a class="btn btn-primary mg-b-20" href="/showCustomers">Back to Show Testimonial</a>
                  </div>
              </div>


  </div>
  <!-- row closed -->


  @stop