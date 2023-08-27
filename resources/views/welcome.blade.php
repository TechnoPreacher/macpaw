@extends('layouts')

@section('content')
	
	<div class="row  justify-content-center">
		
		<div class="col-4">
			<br>
			<div class="d-grid gap-2 col-6 mx-auto">
				<a class="btn btn-primary" href="collection?action=new" role="button">New collection...</a>
			</div>
			
			<br>
			<div class="d-grid gap-2 col-6 mx-auto">
				<a class="btn btn-primary" href="collection?action=index" role="button">All collections</a>
			</div>
			
			<br>
			<div class="d-grid gap-2 col-6 mx-auto">
				<a class="btn btn-primary" href="contributor?action=new" role="button">Add contribution...</a>
			</div>
			
			<br>
			<div class="d-grid gap-2 col-6 mx-auto">
				<a class="btn btn-primary" href="collection?action=retrive" role="button">Retrive collection...</a>
			</div>
			
			<br>
			<div class="row  justify-content-center">
			<div class="d-grid gap-2 col-6 mx-auto">
				<a class="btn btn-primary" href="filter?order=asc" role="button">Filtered collections (ASC)</a>
			</div>
			
			<div class="d-grid gap-2 col-6 mx-auto">
				<a class="btn btn-primary" href="filter?order=desc" role="button">Filtered collections (DESC)</a>
			</div>
				<div>
			
			<br>
			<div class="d-grid gap-2 col-6 mx-auto">
				<a class="btn btn-primary" href="opened" role="button">Not closed collections</a>
			</div>
			
		</div>
	</div>

@endsection