@extends('layouts.app')

@section('content')


<h1>Novo Time</h1>

<form action="{{ url('teams') }}" method="POST">
	{{ csrf_field() }}

	<label for="team-name">Nome: </label>
	<input type="text" name="name" id="team-name">

	<label for="team-abreviation">Sigla: </label>
	<input type="text" name="abreviation" id="team-abreviation">

	<label for="team-badge">Escudo: </label>
	<input type="text" name="badge" id="team-badge">
	
	 <button type="submit">Salvar</button>
</form>

@endsection