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
                    <h6 class="modal-title">Insert Page</h6>
                </div>
                <div class="modal-body">
                    <form action="{{URL('addUser')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" class="form-control" id="user" name="name">
                        </div>

                        <div class="form-group">
                            <label for="name">User Email</label>
                            <input type="text" class="form-control" id="user" name="email">
                        </div>
                        <div class="form-group">
                            <label for="name">User Phone Number</label>
                            <input type="text" class="form-control" id="user" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="name">User Message</label>
                            <input type="text" class="form-control" id="user" name="msg">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                    <a class="btn btn-primary mg-b-20" href="/showUsers">Show Users</a>
                </div>
            </div>


</div>
<!-- row closed -->


  @stop