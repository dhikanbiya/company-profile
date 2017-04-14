@extends('layouts.app')

@section('content')
<div class="container" id="content">	
		<div class="col-md-12">
		<h1>Product lists</h1> 
		<p class="text-center"><a href="{{route('product.create')}}" class="btn btn-md btn-success">add new product</a></p>
		@if (session('success'))
		    <p class="alert alert-success">
		        {{ session('success') }}
		    </p>
		@endif   
	</div>
	<div class="col-md-12">
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Description</th>
				<th>Link</th>
				<th>Action</th>
			</thead>
			<tbody>
			@foreach($product as $row)
				<tr>
					<td>{{++$i}}</td>
					<td>{{$row->title}}</td>
					<td>{{ str_limit($row->description, 60)}}</td>
					<td>{{$row->link}}</td>
					<td><a href="{{route('product.show',$row->id)}}" class="btn btn-success btn-xs">show</a> <a href="{{route('product.edit',$row->id)}}" class="btn btn-info btn-xs">edit</a>
					<form class="inline" method="POST" action="{{route('product.destroy',$row->id)}}">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger btn-xs">delete</button>
					</form>
					</td>
				</tr>
			@endforeach
			</tbody>			
		</table>
		{{ $product->links() }}

	</div>		    
</div>

@endsection
