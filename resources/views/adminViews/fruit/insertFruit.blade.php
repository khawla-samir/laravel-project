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
                    <form action="{{URL('insertFruit')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      
                        <div class="form-group">
                            <label for="name">Fruit Name</label>
                            <input type="text" class="form-control" id="fruit" name="name">
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="col-sm-12 col-md-12">
                                <input type="file"class="form-control-file" name="img">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                    <a class="btn btn-primary mg-b-20" href="/showFruit">Show Fruit</a>
                </div>
            </div>


</div>
<!-- row closed -->


  @stop