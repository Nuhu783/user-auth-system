
@extends('master.app')
@section('content')
<div class="container">
    <div>
    <a href="{{route('show.form')}}" class="btn btn-info">Create</a>
</div>
    <div class="jumbotron">
    	<table scope="table table-bordered">
    		
    			<tr>
    				<th>#</th>
    				<th>Name</th>
    				<th>Email</th>
    				<th>Class</th>
    				<th>Date of birth</th>
    				<th>Actions</th>
    			</tr>
    		
    		<tbody>
    			@foreach ($students as $meddy)
    			<tr>
    				<td>{{$meddy->id}}</td>
    				<td>{{$meddy->user->name}}</td>
    				<td>{{$meddy->user->email}}</td>
    				<td>{{$meddy->class}}</td>
    				<td>{{$meddy->dob}}</td>
                    <td>{{$meddy->subject}}</td>
                    <td>{{$meddy->faculty}}</td>
                    <td>{{$meddy->phone}}</td>
    				<td>
    					<a href="{{route('show.student', $meddy->id)}}">Show</a>
    					<a href="">Edit</a>
    					<a href="">Delete</a>
    				</td>
    			</tr>
    			@endforeach
    		</tbody>
    	</table>
    </div>
        
    </div>
</div>
@stop