@extends('layouts.app')

@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		Posts
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
					Trash
				</th>
			</thead>
			<tbody>
				@if($posts->count() > 0)
					@foreach($posts as $post)
						<tr>
							<td><img src="{{ $post->featured }}" width="40"></td>
							<td>{{ $post->title }}</td>
							<td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-primary">Edit</a></td>
							<td><a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger">X</a></td>
						</tr>
					@endforeach
				@else
					<tr>
						<th colspan="4" class="text-center">There are no posts</th>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>

@stop