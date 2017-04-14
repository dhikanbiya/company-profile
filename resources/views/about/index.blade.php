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
	
	<div class="col-md-12">
	<div class="row">
			<div class="col-md-4">
				<h4>Who we are</h4>
				<p>
		
				</p>
			</div>
			<div class="col-md-4">
				<h4>What we do</h4>
			</div>
			<div class="col-md-4">
				<h4>Image</h4>
			</div>
	</div>
	
	

	</div>		    
</div>

@endsection
