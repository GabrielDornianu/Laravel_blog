@extends('layouts.app')

@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		Tags
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover">
			<thead>
				<th>
					Tag name
				</th>
				<th>
					Edit
				</th>
				<th>
					Delete
				</th>
			</thead>
			<tbody>
				@if($tags->count() > 0)
					@foreach($tags as $tag)
						<tr>
							<td>{{ $tag->tag }}</td>
							<td><a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-primary">Edit</a></td>
							<td><a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-danger">X</a></td>
						</tr>
					@endforeach
				@else
					<tr>
						<th colspan="3" class="text-center">There are no tags yet</th>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>

@stop