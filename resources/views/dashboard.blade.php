@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(Auth::user()->role == 1)
                        {{ 'You are Logged In AS Admin' }}
                    @else 
                        {{ 'You are Logged In AS Non Admin' }}
                    @endif
                    <div class="row">
                        <div class="col-md-11">
                            <ul style="list-style-type: none;">
                                <li style="float: left; margin-right: 10px;"><a href="/allusers">All Users</a></li>
                                <li style="float: left; margin-right: 10px;"><a href="/students">All Students</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection