@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-12" id="content">
		<h1>hello {{Auth::user()->name}}</h1>    
	</div>
    
</div>

@endsection
