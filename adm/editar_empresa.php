<?php

$id = $_GET['id'];
	//Executa consulta

$result = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
$resultado = mysqli_query($conn, $result);


while ($linhas = mysqli_fetch_array($resultado)) {
					//echo $linhas['id'];
	
	?>
	<div class="container theme-showcase" role="main">      
		<div class="page-header">
			<h1>Editar Usuário</h1>
		</div>
		<div class="row espaco">
			<div class="pull-right">
				<a href='administrativo.php?link=2&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
				
				<a href='processa/proc_apagar_usuario.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form class="form-horizontal" method="POST" action="processa/proc_edit_usuario.php">
					
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="<?php echo $linhas['usu_nome']; ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo $linhas['usu_email']; ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="usuario" placeholder="Usuário" value="<?php echo $linhas['usu_login']; ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="senha" placeholder="Senha">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Nivel de Acesso</label>
						<div class="col-sm-10">
							<select class="form-control" name="nivel_de_acesso">
								<option>Selecione</option>
								<option value="1"
								<?php
								if( $linhas['usu_nivel'] == 1){
									echo 'selected';
								}
								?>
								>Administrativo</option>

								<option value="2"
								<?php
								if( $linhas['usu_nivel'] == 2){
									echo 'selected';
								}
								?>
								>Colaborador</option>

								<option value="3"
								<?php
								if( $linhas['usu_nivel'] == 3){
									echo 'selected';
								}
								?>
								>Cliente</option>

							</select>
						</div>
					</div>
					<?php
				}
				?>
				<input type="hidden" name="id" value="<?php echo $linhas['id']; ?>">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Editar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div> <!-- /container -->

