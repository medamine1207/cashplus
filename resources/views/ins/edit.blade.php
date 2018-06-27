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
<h1>editer l'evenement {{$ins->id_in}}</h1>


<form action="{{route('ins.update',$ins->id_in)}}" method="POST">
	
	{{ csrf_field() }}
{{method_field('PUT')}}
  <div class="container">
    <label for="f_montant_in">Montant </label>
    <input type="text" class="form-control" name="f_montant_in" id="f_montant_in" placeholder="saisir montant entrée" value="{{$ins->montant_in}}">
    
  </div>
  <div class="container">
    <label for="f_motif_in" class="btn-block">Motif</label>
		   <select id="f_motif_in" name="f_motif_in" class="form-control">
		  	
			  <option value="service cash plus" {{old('f_motif_in')== "service cash plus" ? "selected" : ''}}>service cash plus</option>
			  <option value="recharge mobile" {{old('f_motif_in')=="recharge mobile" ? "selected" : ''}}>recharge mobile</option>
			  <option value="alimentation direct" {{old('f_motif_in')=="alimentation direct"? "selected" : ''}} >alimentation direct</option>
			  <option value="autres" {{old('f_motif_in')=="autres"? "selected" : ''}} >autres</option>
		  
		</select>
    
  </div>

  <div class="container">
    <label for="f_remarque_in">remarque</label>
    <input type="text" class="form-control" name="f_remarque_in" id="f_remarque_in" placeholder="saisir motif d'entrée" value="{{$ins->remarque_in}}">
  </div>

  <div class="container" style="margin-top: 25px;">
  	<input type="submit" name="" value="modifier l'entrée" class="btn btn-success btn-block">
  </div> 
  <div class="container" style="margin-top: 25px;">
  	<a href="{{route('ins.index')}}" class="btn btn-primary btn-block" role="button" title="ajouter une nouvelle entrée">revenir</a>
  </div> 
</form>

@stop