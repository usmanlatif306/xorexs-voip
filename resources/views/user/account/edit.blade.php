@extends('layouts.account')@section('title', 'My Account') @section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {!! session('success') !!}
    </div>
    @endif
    <!--Grid row-->
    <!--Grid row-->
    <div class="row wow fadeIn">
        <div class="col-md-7 mb-12">
            <div class="card rounded">
                <div class="card-header pb-0">
                    <h4 class="m-0">Update Profile</h4><br>
                </div>
                <div class="card-body">
                    <form action="{{route('user.account.update')}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Name*</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Name" value="{{auth()->user()->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" value="{{auth()->user()->phone}}" placeholder="+442071834834">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Address*</label>
                                <textarea type="textarea" class="form-control" id="Address"
                                    placeholder="Address"></textarea>
                            </div>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{route('user.profile')}}" type="button" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
        <!-- Update password -->
        <div class="col-md-5 mb-12 mt-3 mt-md-0">
            <div class="card rounded">
                <div class="card-header pb-0">
                    <h4 class="mb-0">Update Password</h4><br>
                </div>
                <div class="card-body">
                    <form action="{{route('user.account.password')}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="New Password">New Password*</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="New Password"
                                    placeholder="New Password*">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="Confirm New Password">Confirm New Password*</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="Confirm New Password" placeholder="Confirm New Password">
                            </div>
                        </div>

                        <div class="col-md-12 pl-0">
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection