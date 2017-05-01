	<?php
		function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
		}
	?>

<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="css/estilos.css">
				<title>Teste</title>
		</head>
			<body>
				<div id="container">
					<?php
							$cliente = new Cliente();

						


							if(isset($_POST['cadastrar'])):

									$nome = $_POST['nome'];
									$telefone = $_POST['telefone'];

									

									$cliente->setNome($nome);
									$cliente->setTelefone($telefone);
									//metodo de inserção
									$cliente->insert();


								if($cliente->insert() && !empty($nome) && !empty($telefone)){
									
									echo '<br><div class="alert alert-success" role="alert">Cliente inserido com sucesso!</div>';
								}

							endif;





					?>


						<div class="panel panel-default">
						  	<div class="panel-body">
								<form method="POST" action="">


											<div class="form-group">

												<label class="control-label"  for="nome">Nome:</label>
												<input type="text" name="nome" class="form-control" placeholder="Digite o seu nome">
												</div>
												<div class="form-group">
												
												<label for="telefone"> Telefone:</label>
													<input type="tel" name="telefone" id="telefone" class="form-control" placeholder="Digite o telefone DDD-XXXX-XX-XX" pattern="^\d{3}-\d{5}-\d{2}-\d{2}$" required >
												
											</div>
											<button type="submit" class="btn btn-default" name="cadastrar" >Enviar</button>


								</form>
							</div>
						</div>
				</body>
		</html>