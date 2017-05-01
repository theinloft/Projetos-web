<?php
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Teste</title>
</head>
<body>


<form action="classes/class.dao.php" method="post">




	<div class="form-group">

		<label for="nome">Nome:</label>
		<input type="text" name="nome" class="form-control" placeholder="Digite o seu nome">
		</div>
		<div class="form-group">
		
		<label for="telefone"> Telefone:</label>
			<input type="tel" name="telefone" class="form-control" placeholder="Telefone">
		
	</div>
	<button type="submit" class="btn btn-default" action="create">Enviar</button>



</form>

</body>
</html>