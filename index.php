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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


								if(isset($_POST['atualizar'])):
									$id = $_POST['id'];
									$nome = $_POST['nome'];
									$telefone = $_POST['telefone'];
									$cliente->setNome($nome);
									$cliente->setTelefone($telefone);
									if($cliente->update($id)){
										echo '<br><div class="alert alert-success" role="alert"> Atualizado com sucesso!</div>';
										}
								endif;
					?>

					<?php
							if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
								$id = (int)$_GET['id'];
								if($cliente->delete($id)){
									echo 'br><div class="alert alert-success" role="alert">Deletado com sucesso!</div>';
								}
							endif;
							?>

							<?php
							if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){
								$id = (int)$_GET['id'];
								$resultado = $cliente->find($id);
						
							?>

		


		

<?php } ?>


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

							<table class="table table-bordered">
  								<?php foreach ($cliente->findAll() as $key => $value): ?>
  									
  							
			  									<tr>
			  										<th>ID</th><th>Nome</th><th>Telefone</th>
			  									</tr>
			  									<tr>
			  										<td> <?php echo $value->id; ?> </td><td> <?php echo $value->nome; ?> </td><td> <?php echo $value->telefone; ?> </td>

			  									
			  										<td>
			  											<button type="button" class="btn btn-info btn-lg"
														   data-toggle="modal" data-target="#myModal">Editar</button>

																	<!-- Modal -->
																	<div id="myModal" class="modal fade" role="dialog">
																	  <div class="modal-dialog">

																	    <!-- Modal content-->
																	    <div class="modal-content">
																	      <div class="modal-header">
																	        <button type="button" class="close" data-dismiss="modal">&times;</button>
																	        <h4 class="modal-title">Editar Cliente</h4>
																	      </div>
																			      <div class="modal-body">
																			       
																									<form method="post" action="">
																											<div class="input-prepend">
																												<label class="control-label"  for="nome">Nome:</label>
																												
																												<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" class="form-control" /></label>
																												
																											</div>
																											<div class="input-prepend">
																												<label class="control-label"  for="telefone">Telefone:</label>
																												
																												<input type="tel" name="telefone" value="<?php echo $resultado->telefone; ?>" placeholder="Telefone:" class="form-control"/>
																												
																											</div>
																											<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
																											<br />
																											<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
																									</form>

																			      </div>
																			      <div class="modal-footer">
																			        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
																			      </div>
																	    </div>

																	  </div>
																	</div>


														<button class="btn btn-danger" data-href="index.php?acao=deletar&id= . $value->id ." data-toggle="modal" data-target="#confirm-delete">
    Delete
</button>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                ...
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

														
														
													</td>
												</tr>
  								<?php endforeach ?>

						    </table>
						</div>

				</body>
		</html>