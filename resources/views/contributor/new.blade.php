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
			<h5>Add new contribution </h5>
			<form action="" method="POST">
				
				@csrf
				
				@isset($data)
					<div class="mb-3">
						<label for="collectionId">Select collection:</label>
						<select class="form-control" name="collectionId" id="collectionId">
							@foreach($data as $collection)
								<option value="<?=$collection->id ?>"><?=$collection->title ?></option>
							@endforeach
						</select>
					</div>
				@endisset
				
				<div class="mb-3">
					<label for="contributorUser" class="form-label">Username:</label>
					<input type="text" class="form-control" id="contributorUser" name="contributorUser">
				</div>
				
				<div class="mb-3">
					<label for="contributorAmount" class="form-label">Amount of contribution:</label>
					<input type="number" class="form-control" id="contributorAmount" name="contributorAmount">
				</div>
				
				<button type="submit" class="btn btn-primary">Donate...</button>
			
			</form>
		
		</div>
	</div>

@endsection