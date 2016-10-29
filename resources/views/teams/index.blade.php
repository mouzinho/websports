@extends('layouts.app')

@section('content')

<h1>Times</h1>

<a href="{{ route('teams.create') }}" class="btn btn-primary">Novo Time</a>

<table class="table table-bordered table-striped">
@foreach($teams as $team)
	<tr>
		<td>{{ $team->name }}</td>
		<td>{{ $team->abreviation }}</td>
		<td>{{ $team->updated_at }}</td>
		<td>
			<a href="{{ route('teams.show', $team->id) }}" class="btn btn-info">Visualizar</a>
			<a href="{{ route('teams.edit', $team->id) }}" class="btn btn-warning">Editar</a>
			<a href="{{ route('teams.destroy', $team->id) }}" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
@endforeach
</table>

@endsection
