@extends('layouts.customstudent')
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
	    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data))
                    <tr>
                        <td>{{ $data['first_name'] }}</td>
                        <td>{{ $data['last_name'] }}</td>
                        <td>{{ $data['address'] }}</td>
                    </tr>
            @else
            	<tr>
            		<th>{{'NO DATA FOUND'}}</th>
            	</tr>    
            @endif
        </tbody>
    </table>
</div>
@endsection