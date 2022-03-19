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
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && count($data) > 0)
                @foreach($data as $each)
                    <tr>
                        <td>{{ $each->first_name }}</td>
                        <td>{{ $each->last_name }}</td>
                        <td>{{ $each->address }}</td>
                        <td>
                            <form method="POST" action="/students/{{$each->id}}">
                                {{ csrf_field() }}
                                {{ method_field('GET') }}
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success show-user" value="Show">
                                </div>
                            </form>
                        </td>
                        <td><a href="/students/{{$each->id}}/edit"><span class="btn btn-info">Edit</span></a></td>
                        <td>
                            <form method="POST" action="/students/{{$each->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger delete-user" value="Delete">
                                </div>
                            </form>
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
    {!! $data->links() !!}
</div>
@endsection