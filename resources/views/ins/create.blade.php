@extends('layouts.default')

@section('content')
<form action="{{route('ins.store')}}" method="POST">
	{{ csrf_field() }}
  <div class="container">
    <label for="f_montant_in">Montant </label>
    <input type="text" class="form-control" name="f_montant_in" id="f_montant_in" placeholder="saisir montant entrée">
  </div>
  <div class="container">
    <label for="f_motif_in">Motif</label>
    <input type="text" class="form-control" name="f_motif_in" id="f_motif_in" placeholder="saisir motif d'entrée">
  </div>

  <div class="container">
    <label for="f_remarque_in">remarque</label>
    <input type="text" class="form-control" name="f_remarque_in" id="f_remarque_in" placeholder="saisir motif d'entrée">
  </div>

  <div class="container" style="margin-top: 25px;">
  	<input type="submit" name="" value="ajouter un entrée" class="btn btn-success btn-block">
  </div> 
</form>
@endsection
