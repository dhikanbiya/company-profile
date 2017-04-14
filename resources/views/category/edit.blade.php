@extends('layouts.app')

@section('content')

	<div id="content" class="container">
		<div class="col-md-12">
		<h1>Edit category: {{$show->name}}</h1> 		
		</div>
		<div class="col-md-12">
			<div class="col-md-7">
				<form method="POST" class="form-horizontal" action="{{route('category.update',$show->id)}}">
					{{ csrf_field() }}
					{{ method_field('PATCH')}}
					<div class="form-group">
					  <label for="name" class="col-md-3 control-label">Category name</label>
					  <div class="col-md-9">
					  	<input class="form-control" id="title" type="text" name="name" placeholder="category name"value="{{old('name',$show->name)}}">
					  </div>				  
					</div>					
				  <div class="form-group">
				  	<div class="col-md-4 col-md-offset-5">
				  		<button class="btn btn-success" type="submit">save</button> &nbsp;
				  		<a class="btn btn-warning" href="{{route('category.index')}}">cancel</a>	
				  	</div>				  	
				  </div>  				  			
				</form>			
			</div>	
			<div class="col-md-5">
				@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
			</div>			
		</div>
	</div>	    


@endsection
