@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-12" id="content">
		<h1>Edit {{$show->name}} Password</h1>
		<div class="col-md-4">
			<form method="POST" action="{{route('profile.update',$show->id)}}">
				{{ csrf_field() }}		
				{{ method_field('PATCH') }} 				
				<div class="form-group col-md-8">
					<label for="password">New Password</label>
					<input type="password" name="newpass" value="{{old('oldpass')}}" class="form-control">				
				</div>
				<div class="form-group col-md-12">
					<label for="password">Confirm Password</label>
					<input type="password" name="passconf" value="{{old('oldpass')}}" class="form-control">				
				</div>
				<div class="form-group col-md-6 col-md-offset-3">
					<button class="btn btn-success">save</button>
					<button class="btn btn-info">cancel</button>
				</div>											
				</form>
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
