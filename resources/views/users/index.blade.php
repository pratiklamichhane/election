@extends('dashboard-layout.app')

@section('breadcrumb')
<span>Home</span> / <span class="menu-text">Services & Packages</span>
@endsection

@section('content')

<div class="row">
              <div class="col-xxl-12">
              @include('components.message-flash')

                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Users and requests</h5>
                    </div>
                    <hr>
                    <div class="table-responsive">
                      <table class="table align-middle table-hover m-0" id="dataTable">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Nagrita Number</th>
                            <th>Nagrita Front</th>
                            <th>Nagrita Back</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->kyc->nagrita_number}}</td>
                                <td>
                                <a href="{{asset('storage/'.$user->kyc->nagrita_front)}}" target="_blank">
                                    View
                                </a>
                                </td>
                                <td>
                                <a href="{{asset('storage/'.$user->kyc->nagrita_back)}}" target="_blank">
                                    View
                                </a>
                                </td>
                                <td>
                                    @if($user->is_active)
                                    <form action="{{route('users.approve' , $user->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-sm btn-warning">Ban User</button>
                                    @else
                                    <form action="{{route('users.approve' , $user->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
    </div>
@endsection

