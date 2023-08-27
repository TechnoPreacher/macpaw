@extends('layouts')

@section('content')
	<div class="row  justify-content-center">
		
		<div class="col-8">
			@isset($collection)
				
				<h5>Info about collection with selected id <?=$collection->id;?></h5>
				<br>
				
				<table class="table">
					<thead>
					<tr>
						<td><?=$collection->id; ?></td>
						<td><?=$collection->title; ?></td>
						<td><?=$collection->description; ?></td>
						<td><?=$collection->target_amount; ?></td>
						<td><a href="<?=$collection->link; ?>">link...</a></td>
					
					</tr>
					</thead>
				</table>
				
				<br>
				<br>
				@isset($contributions)
					<h6>Contributions:</h6>
					
					<table class="table">
						<tbody>
						@foreach($contributions as $contribution)
							<tr>
								<td><?=$contribution->id; ?></td>
								<td><?=$contribution->username; ?></td>
								<td><?=$contribution->amount; ?></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				@endisset
			@endisset
		
		</div>
	</div>

@endsection