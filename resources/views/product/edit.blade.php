@extends('layouts.app')

@section('content')

<div id="content" class="container">
	<div class="col-md-12">
	<h1>Edit Product : {{$row->name}}</h1> 		
	</div>
	<div class="col-md-12">
		<div class="col-md-7">
			<form method="POST" class="form-horizontal" action="{{route('product.update',$row->id)}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PATCH') }} 
				<div class="form-group">
				  <label for="title" class="col-md-3 control-label">Title</label>
				  <div class="col-md-9">
				  	<input class="form-control" id="title" type="text" name="title" placeholder="product title"value="{{old('title',$row->title)}}">
				  </div>				  
				</div>
				<div class="form-group">
				  <label for="desc" class="col-md-3 control-label">Description</label>
				  <div class="col-md-9">
				  	<textarea class="form-control col-md-9" name="desc" cols="3" rows="5" placeholder="description">{{old('desc',$row->description)}}</textarea>
				  </div>				  
				</div>
				<div class="form-group">
				  <label for="cat" class="col-md-3 control-label">Category</label>
				  <div class="col-md-9">
				  	<select class="form-control" name="cat">
				  	   @foreach($cat as $c)
				  	   	<option value="{{$c->id}}" {{($c->id==$row->id ? 'selected = selected' : ' ')}}>{{$c->name}}</option>
				  	   @endforeach
				  	 </select>
				  </div>				  
				</div>				
			  <div class="form-group">
			    <label for="link" class="col-md-3 control-label">Link</label>
			    <div class="col-md-9">
			    	<input type="text" name="link" class="form-control" placeholder="product link" value={{old('link',$row->link)}}>
			    </div>				  
			  </div>
			  <div class="form-group">
			    <label for="image" class="col-md-3 control-label">Image preview</label>
			    <div class="col-md-9">
			    	<input type="hidden" name="oldimage" value={{$row->image}}>
			    	<img src="{{url('products/'.$row->image)}}" class="img-responsive">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="image" class="col-md-3 control-label">Image</label>
			    <div class="col-md-9">
			    	<input type="file" name="image" value={{old('image')}}>
			    	<p class="help-block">image in png, jpg, bmp</p>
			    </div>
			  </div>
			  <div class="form-group">
			  	<div class="col-md-4 col-md-offset-5">
			  		<button class="btn btn-success" type="submit">save</button> &nbsp;
			  		<a class="btn btn-warning" href="{{route('slide.index')}}">cancel</a>	
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
