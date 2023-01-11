@extends('layouts.account')@section('title', 'Profile') @section('content')
<div class="container">
    <!--Grid row-->
    <div class="row wow fadeIn">
        <div class="container-fluid mb-3">
            @if(session('success'))
            <div class="alert alert-success col-md-10 offset-md-1">
                {!! session('success') !!}
            </div>
            @endif
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <a href="{{route('user.account.edit')}}" class="btn btn-sm btn-primary float-right">Edit
                        Profile</a>
                </div>
            </div>
        </div>
        <!--Grid column-->
        <div class="col-12 col-md-10 offset-md-1 mb-12">
            <table class="table table-hover table-bordered">
                <!-- Table head -->
                <thead class="tableheading">
                    <th colspan="2">My Account Details</th>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{auth()->user()->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone</th>
                        <td>{{auth()->user()->phone}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{auth()->user()->email}}</td>
                    </tr>
                </tbody>
                <!-- Table body -->
            </table>
        </div>
        <!--Grid column-->
    </div>
</div>
@endsection