@extends('layouts.app')

@section('content')
	@include('admin.includes.errors')
	<div class="panel panel-default">
		<div class="panel-heading">
			Edit your profile
		</div>
		<div class="panel-body">
			<form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" value="{{ $user->name }}">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" value="{{ $user->email }}">
				</div>
				<div class="form-group">
					<label for="password">New password</label>
					<input type="password" name="password" class="form-control" value="{{ $user->password }}">
				</div>
				<div class="form-group">
					<label for="avatar">Avatar</label>
					<input type="file" name="avatar" class="form-control" value="{{ $user->profile->avatar }}">
				</div>
				<div class="form-group">
					<label for="email">Facebook profile</label>
					<input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook }}">
				</div>
				<div class="form-group">
					<label for="email">Youtube profile</label>
					<input type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube }}">
				</div>
				<div class="form-group">
					<label for="email">About you</label>
					<textarea class="form-control" name="about" id="about">{{ $user->profile->about }}</textarea>
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