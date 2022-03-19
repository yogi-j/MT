@extends('layouts.custom')
@section('content')
	<div class="container mt-4">
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
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Dob</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && count($data) > 0)
                @foreach($data as $each)
                    <tr>
                        <td>{{ $each->name }}</td>
                        <td>{{ $each->email }}</td>
                        <td>{{ $each->age }}</td>
                        <td>{{ $each->dob }}</td>
                        <td>
                            <img src="<?php echo $image[$each->id];  ?>" width="50">    
                        </td>

                        
                    </tr>
                @endforeach
            @else
            	<tr>
            		<th>{{'NO DATA FOUND'}}</th>
            	</tr>    
            @endif
        </tbody>
    </table>
</div>
@endsection