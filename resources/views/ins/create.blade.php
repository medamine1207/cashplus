@extends('layouts.default')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('ins.store')}}" method="POST">
	{{ csrf_field() }}

  <div class="container">
    <label for="f_montant_in">Montant </label>
    <input type="text" class="form-control" name="f_montant_in" id="f_montant_in" placeholder="saisir montant entrée" value="{{old('f_montant_in')}}">
    
  </div>

 

  <div class="container">
    <label for="f_motif_in" class="btn-block">Motif</label>
		   <select id="f_motif_in" name="f_motif_in" value="{{old('f_motif_in')}}" placeholder="saisir motif d'entrée" class="form-control">
		  	<option value="" selected>choisir motif</option>
			  <option value="service cash plus">service cash plus</option>
			  <option value="recharge mobile">recharge mobile</option>
			  <option value="alimentation direct">alimentation direct</option>
			  <option value="autres">autres</option>
		  
		</select>
    
  </div>

  <div class="container">
    <label for="f_remarque_in">remarque</label>
    <input type="text" class="form-control" name="f_remarque_in" id="f_remarque_in" placeholder="saisir motif d'entrée" value="{{old('f_remarque_in')}}">
  </div>

  <div class="container" style="margin-top: 25px;">
  	<input type="submit" name="" value="ajouter un entrée" class="btn btn-success btn-block">
  </div> 
</form>
@endsection
<span class="has-error text-danger"></span>