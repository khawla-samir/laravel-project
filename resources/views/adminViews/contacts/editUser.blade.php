@extends('layouts.main_layout')

  @section('pageContent')
  <div class="row">
    @foreach ($errors->all() as $msg)
            <div class="col-12">
                <div class="alert alert-danger">{{ $msg }}</div>
            </div>
    @endforeach 
</div>
  <!-- row -->
  <div class="row row-sm">
              <div class="modal-content modal-content-demo">
                  <div class="modal-header">
                      <h2 class="modal-title">Edit</h>
                  </div>
                  <div class="modal-body">
                      <form action="/updateUser/{{$user->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <div class="form-group">
                              <label for="exampleInputEmail1">User Name</label>
                              <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">User Email</label>
                            <input type="text" class="form-control" id="name" value="{{$user->email}}" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Phone Number</label>
                            <input type="text" class="form-control" id="name" value="{{$user->phone}}" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Message</label>
                            <input type="text" class="form-control" id="name" value="{{$user->msg}}" name="msg">
                        </div>
                        

                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Edit</button>
                          </div>
                      </form>
                      <a class="btn btn-primary mg-b-20" href="/showUsers">Back to Show Users</a>
                  </div>
              </div>


  </div>
  <!-- row closed -->


  @stop