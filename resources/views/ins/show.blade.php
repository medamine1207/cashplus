@extends('layouts.default')
@section('content')
 



<form>
		<label class="text-danger">motif d'entrée : </label> {{$ins->motif_in}}<br>


 <label>Montant entrée : </label> {{$ins->montant_in}}<br>
 <label>remarque : </label> {{$ins->remarque_in}}<br>
 <label> date d'entrée : </label> {{$ins->created_at}}<br>

			<a href="{{route('ins.index')}}" class="btn btn-primary" role="button" title="ajouter une nouvelle entrée">revenir</a>
</form>


@stop
