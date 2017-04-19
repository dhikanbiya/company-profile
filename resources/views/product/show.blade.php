@extends('layouts.app')

@section('content')
<div class="container" id="content">
	
		<div class="col-md-12">
		<h1>Product name: {{$show->title}}</h1>
	</div>
	<div class="col-md-7">	
		<p>
			<b>description: </b>
			{{$show->description}}
		</p>
		<p><b>link: </b>{{$show->link}}</p>
		<p><b>category: </b>{{$show->category_id}}</p>		
		<p>
			<a href="{{route('product.edit',$show->id)}}" class="btn btn-success btn-xs">edit</a>
			<a href="{{route('product.index')}}" class="btn btn-info btn-xs">back</a>
		</p>
	</div>
	<div class="com-md-4">
		<p><b>image</b></p>		
		<img src="{{url('products/'.$show->image)}}" class="img-responsive">
	</div>
		    
</div>

@endsection
