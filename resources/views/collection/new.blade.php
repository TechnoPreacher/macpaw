@extends('layouts')

@section('content')
	
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	<div class="row  justify-content-center">
		
		<div class="col-4">
			<h5>Add new collection </h5>
			<form action="" method="POST">
				
				@csrf
				
				<div class="mb-3">
					<label for="collectionTitle" class="form-label">Title:</label>
					<input type="text" class="form-control" id="collectionTitle" name="collectionTitle">
				</div>
				
				<div class="mb-3">
					<label for="collectionDescription" class="form-label">Description:</label>
					<textarea class="form-control" id="collectionDescription" name="collectionDescription"></textarea>
				</div>
				
				<div class="mb-3">
					<label for="collectionAmount" class="form-label">Amount:</label>
					<input type="number" class="form-control" id="collectionAmount" name="collectionAmount">
				</div>
				
				<div class="mb-3">
					<label for="collectionUrl" class="form-label">Link:</label>
					<input type="url" class="form-control" id="collectiocollectionUrlnAmount" name="collectionUrl">
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			
			</form>
		
		</div>
	</div>

@endsection