@extends('layout')
@section('content')

<h1 class="ui centered aligned purple header">Bienvenue, sauriez-vous déchiffrer le message?</h1>
<form action="/messages/create" method="get">
			{{csrf_field()}}
			<button class="ui green button">Ajouter un message</button>
</form>
<h2>Tous les messages</h2>


@stop







	
</body>
</html>