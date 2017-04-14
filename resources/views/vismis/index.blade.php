@extends('layouts.app')

@section('content')
<div class="container" id="content">	
		<div class="col-md-12">
		<h1>Vision and Mission section</h1> 
		<p class="text-center"></p>
		@if (session('success'))
		    <p class="alert alert-success">
		        {{ session('success') }}
		    </p>
		@endif   
	</div>	

		@if($vision->isEmpty())
			<div class="col-md-12">
				<p>no data</p>
				<p><a href="{{route('vision.create')}}" class="btn btn-xs btn-success">create</a></p>
			</div>		
		@endif

		@foreach($vision as $item)
		<div class="col-md-12">
			<a href="{{route('vision.edit',$item->id)}}" class="pull-right btn btn-xs btn-info">edit</a>
		</div>
			<div class="col-md-12">
				<div class="row">
						<div class="col-md-4">
							<h4>Vision</h4>
							<p>
								{{$item->section_one}}
							</p>
						</div>
						<div class="col-md-4">
							<h4>Mission</h4>
							<p>
								{{$item->section_two}}
							</p>
						</div>
						<div class="col-md-4">
							<h4>Image</h4>
							<img src="{{url('images/'.$item->image)}}" class="img-responsive">
						</div>
				</div>
			</div>
		@endforeach
	
	
			    
</div>

@endsection
