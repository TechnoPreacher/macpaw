@extends('layouts')

@section('content')
	
	<div class="row  justify-content-center">
		
		<div class="col-8">
			@isset($title)
				<h5>{{$title}}</h5>
			@endisset
			
			@isset($data)
				
				<table class="table">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Title</th>
						
						<th scope="col">Description</th>
						<th scope="col">Target</th>
						<th scope="col">Link</th>
						<th scope="col">Residual Target</th>
						<th scope="col">Current Gather</th>
					</tr>
					</thead>
					<tbody>
					@foreach($data as $collection)
						<tr>
							<th scope="row"><?=$collection->id; ?></th>
							<td><?=$collection->title; ?></td>
							
							<td><?=$collection->description; ?></td>
							<td><?=$collection->target_amount; ?></td>
							<td><a href="<?=$collection->link; ?>">link...</a></td>
							<td><?=$collection->residual_target; ?></td>
							<td><?=$collection->current_amount; ?></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			@endisset
		
		
		</div>
	</div>
@endsection