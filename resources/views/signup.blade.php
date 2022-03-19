@extends('layouts.custom')
@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
            </div>
        @endif
        <form method="POST" action="{{ url('signup') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row form-group mt-4">
                <div class="col-md-3"><label>Name:</label></div>
                <div class="col-md-9"><input type="text" name="name" class="form-control" placeholder="Name"></div>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
            </div>
            <div class="row form-group mt-2 mb-2">
                <div class="col-md-3"><label>Email:</label></div>
                <div class="col-md-9"><input type="text" name="email" class="form-control" placeholder="Email"></div>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="row form-group mt-2 mb-2">
                <div class="col-md-3"><label>Age:</label></div>
                <div class="col-md-9"><input type="number" name="age" class="form-control" placeholder="Age"></div>
                @if ($errors->has('age'))
                    <span class="text-danger">{{ $errors->first('age') }}</span>
                @endif
            </div>

            <div class="row form-group mt-2 mb-2">
                <div class="col-md-3"><label>Dob:</label></div>
                <div class="col-md-9"><input type="text" name="dob" class="form-control" placeholder="Dob"></div>
                @if ($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                @endif
            </div>

            <div class="row form-group mt-2 mb-2">
                <div class="col-md-3"><label>Address:</label></div>
                <div class="col-md-9"><input type="text" name="address" class="form-control" placeholder="Address"></div>
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
            </div>

            <div class="row form-group mt-2 mb-2">
                <div class="col-md-3"><label>Role:</label></div>
                <div class="col-md-9">
                    <select name="role" class="form-select">
                        <option value="" hidden disabled selected >Select Your Role</option>
                        <option value="1">Admin</option>
                        <option value="2">Non Admin</option>
                    </select>
                </div>
                @if ($errors->has('role'))
                    <span class="text-danger">{{ $errors->first('role') }}</span>
                @endif
            </div>

            <div class="row form-group mt-2 mb-2">
                <div class="col-md-3"><label>Image:</label></div>
                <div class="col-md-9"><input type="file" name="image" class="form-control"></div>
                @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
            </div>

            <div class="row form-group mt-2 mb-2">
                <div class="col-md-3"><label>Password:</label></div>
                <div class="col-md-9"><input type="password" name="password" class="form-control" placeholder="Password"></div>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            
            <div class="row form-group mt-2 mb-2">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>
    </div>
@endsection