@extends('layouts.customstudent')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create Student') }}</div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                        </div>
                    @endif
                    <form method="post" action="{{url('students')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Carcompany">First Name:</label>
                            <input type="text" class="form-control" name="first_name" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Model">Last Name:</label>
                            <input type="text" class="form-control" name="last_name">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <label for="Price">Address:</label>
                            <input type="text" class="form-control" name="address" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection