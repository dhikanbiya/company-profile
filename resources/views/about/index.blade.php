@extends('layouts.app')

@section('content')
<div class="container" id="content">	
		<div class="col-md-12">
		<h1>About section</h1> 
		<p class="text-center"></p>
		@if (session('success'))
		    <p class="alert alert-success">
		        {{ session('success') }}
		    </p>
		@endif   
	</div>	

	@if($about)
		@foreach($about as $item)
		<div class="col-md-12">
			<a href="{{route('about.edit',$item->id)}}" class="pull-right btn btn-xs btn-info">edit</a>
		</div>
			<div class="col-md-12">
				<div class="row">
						<div class="col-md-4">
							<h4>Who we are</h4>
							<p>
								{{$item->section_one}}
							</p>
						</div>
						<div class="col-md-4">
							<h4>What we do</h4>
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
	@else
		<div class="col-md-12">
			<p>no data</p>
			<p><a href="{{route('about.create')}}" class="btn btn-xs btn-success">create</a></p>
		</div>		
	@endif
	
			    
</div>

@endsection
