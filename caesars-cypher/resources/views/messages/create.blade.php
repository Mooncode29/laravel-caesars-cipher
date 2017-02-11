<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
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

</form>

</body>
</html>