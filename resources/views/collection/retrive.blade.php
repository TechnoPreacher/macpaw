@extends('layouts')

@section('content')
	
	<div class="row  justify-content-center">
		
		<div class="col-4">
			<h5>Get info about collection by id</h5>
			<form action="" method="GET">
				
				
				<div class="mb-3">
					<label for="collectionId" class="form-label">ID:</label>
					<input type="number" class="form-control" id="collectionId" name="collectionId">
				</div>
				
				
				<button type="submit" class="btn btn-primary">Retrive</button>
			
			</form>
		
		</div>
	</div>

@endsection