<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste Messages</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
<h1 class="ui centered aligned header">Liste de messages</h1>
<form action="/messages/create" method="get">
			{{csrf_field()}}
			<button class="ui button">Ajouter un message</button>
	</form>

<!-- @foreach($originalMessages as $message)
<table>
	<tr>
		<th>Id</th>
		<th>Decalage</th>
		<th>Message</th>
	</tr>
	<tr>
		<td><?=$message->id?></td>
		<td><?=$message->decalage;?></td>
		<td><?=$message->message;?></td>
	</tr>
</table>

@endforeach -->
<?php



?>

	
</body>
</html>