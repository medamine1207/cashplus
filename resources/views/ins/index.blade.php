@extends('layouts.default')


@section('content')
	<h1><p class="navbar-text">Liste des entrees saisies</p></h1>
	
	<table class="table table-bordered table-striped">
	
	<thead class="text-danger">
	<tr>
		<td>Montant entrée</td>
		<td>Motif d'entrée</td>
		<td>remarque d'entrée</td>
		<td>date d'entrée</td>
	</tr>
	</thead>
	<tbody>
	@foreach ($ins as $in)
		<tr>
			<td><a href="{{route('ins.show',['in'=>$in->id_in])}}">{{$in->montant_in}}</a></td>
			<td>{{$in->motif_in}} </td>
			<td>{{$in->remarque_in}}</td>
			<td>{{$in->created_at}}</td>
		</tr>
	@endforeach
	</tbody>
	</table>
		<div class="container container-fluid">
		<form>
			<a href="{{route('ins.create')}}" class="btn btn-primary" role="button" title="ajouter une nouvelle entrée">ajouter une entrée</a>
		</form>
		</div>
@endsection