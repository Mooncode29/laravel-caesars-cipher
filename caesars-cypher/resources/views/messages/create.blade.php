@extends('layout')
@section('content')
	<form class= "ui form" action="/messages/addProduct" method="post">
	{{csrf_field()}}
	<div class="field">
    	<label>Message</label>
   		<textarea></textarea>
  	</div>
	<div class="field">
		<label for="decalage">Clef de chiffrement</label>
		<input type="number" name="decalage">
	</div>
	<div class="field">
		<input type="submit" value="Valider">
	</div>

@stop