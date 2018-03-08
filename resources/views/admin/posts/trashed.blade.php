@extends('layouts.app')

@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		Trashed posts
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover">
			<thead>
				<th>
					Image
				</th>
				<th>
					Title
				</th>
				<th>
					Edit
				</th>
				<th>
					Restore
				</th>
				<th>
					Destroy
				</th>
			</thead>
			<tbody>
				@if($posts->count() > 0)
					@foreach($posts as $post)
						<tr>
							<td><img src="{{ $post->featured }}" width="40"></td>
							<td>{{ $post->title }}</td>
							<td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-primary">update</a></td>
							<td><a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-success">Restore</a></td>
							<td><a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-danger">X</a></td>
						</tr>
					@endforeach
				@else
					<tr>
						<th colspan="5" class="text-center">There are no trashed posts</th>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>

@stop