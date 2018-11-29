@extends('layouts.admin')
@section('page.title', 'Rooms List')

@section('content')
<div class="container">
	@include('partially.alerts.success')
    <div class="h5 mb-3">
    	Rooms List: 
    	<a class="btn btn-primary btn-sm float-right" href="{{ route('admin.room.new') }}">Add Room</a>
    </div>

    <table class="table table-hover table-bordered">
    	<thead class="thead-light">
    		<tr>
    			<th>ID</th>
    			<th>Name</th>
    			<th>Location</th>
    			<th>Price</th>
    			<th></th>
    		</tr>
    	</thead>
    	<body>
    		@foreach($data as $key => $room)
    		<tr>
    			<th>#{{ $room->id }}</th>
    			<td>{{ $room->name }}</td>
    			<td>{{ $room->location }}</td>
    			<td>${{ $room->price }}</td>
    			<td class="text-right">
    				<a href="#" class="btn btn-sm btn-secondary">Manage</a> 
    				<a href="#" class="btn btn-sm btn-danger">Delete</a> 
    			</td>
    		</tr>
    		@endforeach
    	</body>
    </table>
    {{ $data->links() }}
</div>
@endsection