@extends('layouts.app')

@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		Users
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover">
			<thead>
				<th>
					Image
				</th>
				<th>
					Name
				</th>
				<th>
					Permissions
				</th>
				<th>
					Delete
				</th>
			</thead>
			<tbody>
				@if($users->count() > 0)
					@foreach($users as $user)
						<tr>
							<td> <img src="{{ asset($user->profile->avatar) }}" width="50"> </td>
							<td> {{ $user->name }} </td>
							<td> 
								@if($user->admin == 1)
									<a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-success">Unassign admin</a>
								@else
									<a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-primary">Make admin</a>
								@endif
							</td>
							<td> 
								@if(!(Auth::id() == $user->id))
									<a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-danger">X</a> 
								@endif
							</td>
						</tr>
					@endforeach
				@else
					<tr>
						<th colspan="4" class="text-center">No users</th>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>

@stop