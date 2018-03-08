@extends('layouts.app')

@section('content')
	@include('admin.includes.errors')
	<div class="panel panel-default">
		<div class="panel-heading">
			Edit blog's settings
		</div>
		<div class="panel-body">
			<form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Site name</label>
					<input type="text" name="site_name" class="form-control" value="{{ $settings->site_name }}">
				</div>
				<div class="form-group">
					<label for="contact_number">Contact number</label>
					<input type="text" name="contact_number" class="form-control" value="{{ $settings->contact_number }}">
				</div>
				<div class="form-group">
					<label for="contact_email">Contact email</label>
					<input type="text" name="contact_email" class="form-control" value="{{ $settings->contact_email }}">
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" name="address" class="form-control" value="{{ $settings->address }}">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-success">Update site settings</button>
					</div>
				</div>
			</form>
		</div>
	</div>

@stop