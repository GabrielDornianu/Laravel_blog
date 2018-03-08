@extends('layouts.app')

@section('content')
	@include('admin.includes.errors')
	<div class="panel panel-default">
		<div class="panel-heading">
			Create new post
		</div>
		<div class="panel-body">
			<form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" value="{{ $post->title }}">
				</div>
				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
				</div>
				<div class="form-group">
					<label for="content">Textarea</label>
					<textarea class="form-control" name="content">{{ $post->content }}</textarea>
				</div>
				<div class="form-group">
					<label for="tags">Select tags</label>
					@foreach($tags as $tag)
						<div class="checkbox">
							<label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
								@foreach($post->tags as $t)
									@if($tag->id == $t->id)
										checked
									@endif
								@endforeach
							> {{ $tag->tag }}</label>
						</div>
					@endforeach
				</div>
				<div class="form-group">
					<label for="category">Select a category</label>
					<select class="form-control" name="category_id" id="category">
						@foreach($categories as $category)
							<option value="{{ $category->id }}"
								@if($post->category_id == $category->id)
									selected
								@endif
							>{{ $category->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-success">Update</button>
					</div>
				</div>
			</form>
		</div>
	</div>

@stop