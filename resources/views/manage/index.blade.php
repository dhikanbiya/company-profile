@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-12" id="content">
		<h1>Users</h1>
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Status</th>					
					<th>Action</th>
				</thead>
				<tbody>
				@foreach($user as $u)
					<tr>
						<td>{{++$i}}</td>
						<td>{{$u->name}}</td>
						<td>{{$u->email}}</td>
						<td><span class="label label-{{($u->active==0 ? 'warning' : 'success')}}">{{($u->active==0 ? 'not active' : 'active')}}</span></td>
						
						<td>
						<form class="form-inline" style="display: inline-block;" method="POST" action="{{route('manage.update',$u->id)}}">
							{{ csrf_field() }}		
							{{ method_field('PATCH') }}
							<input type="hidden" name="up" value="{{($u->active==0 ? '1':'0')}}">
							<button type="submit" class="btn btn-info btn-xs">{{($u->active==0 ? 'activate':'deactivate')}}</button>
						</form>
						<form class="form-inline" style="display: inline-block;" method="POST" action="{{route('manage.destroy',$u->id)}}">
							{{ csrf_field() }}		
							{{ method_field('DELETE') }}
							<button type="submit" class="btn btn-danger btn-xs">destroy</button>
						</form>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>		
	</div>    
</div>

@endsection
