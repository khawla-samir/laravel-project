@extends('layouts.main_layout')

  @section('pageContent')
  <!--div-->
  <div class="col-xl-12">
      <div class="d-flex justify-content-center">
      <div class="card" style="width:90%">
          <div class="card-header pb-0">
              <div class="d-flex justify-content-between">
                  <h4 class="card-title mg-b-0">Users Rows Table</h4>
                  <i class="mdi mdi-dots-horizontal text-gray"></i>
              </div>
              <!-- <p class="tx-12 tx-gray-500 mb-2">Example of Valex Hoverable Rows Table.. <a href="">Learn more</a></p> -->
          </div>
          <div class="card-body">
              <div class="table-responsive hoverable-table">
                <a class="btn btn-primary mg-b-20" href="/insertUserView">Insert</a>
                      
                  <div class="d-flex justify-content-center">
                  <table id="example-delete" class="table table-hover" style="width:90%">
                      <thead>
                      <tr>
                          <th style="width: 10% ">id</th>
                          <th style="width: 20% ">Name</th>
                          <th style="width: 20% ">Email</th>
                          <th style="width: 20% ">Phone</th>
                          <th style="width: 20% ">Message</th>
                          <th style="width: 20% ">Created</th>
                          <th style="width: 5% ">Edit</th>
                          <th style="width: 5% ">Delete</th>

                      </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                      <tr>   
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->phone}}</td>
                          <td>{{$user->msg}}</td>
                          <td>{{$user->created_at}}</td>
                          <td>
                            <form action="/editUser/{{$user->id}}" method="get">
                                <button  type="submit" class="modal-effect btn btn-sm btn-info">

                                </button>
                            </form>
                          </td>
                          <td>
                              <form action="/deleteUser/{{$user->id}}" method="get">
                                  <button  type="submit" class="modal-effect btn btn-sm btn-danger">

                                  </button>
                              </form>
                          </td> 
                        </tr>
                      @endforeach
                      </tbody>
                      <div>
                        {{ $users->links()}}
                         </div>  
                  </table>
              </div>
  </div>
              </div>
          </div>
          
      </div>
      <a class="btn btn-primary mg-b-20" href="/home">Back to Home</a>
  </div>
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
@stop