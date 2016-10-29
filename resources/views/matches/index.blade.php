@extends('layouts.app')

@section('content')

<h1>Partidas</h1>
<table class="table table-bordered table-striped">
	@foreach($matches as $match)
	<tr>
		<td>{{ $match->date }}</td>
		<td>{{ $match->home_id }}</td>
		<td>{{ $match->away_id }}</td>
		<td>{{ $match->status }}</td>
		<td>
			<a href="{{ route('matches.show',$match->id) }}" class="btn btn-info">Visualizar</a>
			
		</td>
	</tr>
	@endforeach
</table>

@endsection