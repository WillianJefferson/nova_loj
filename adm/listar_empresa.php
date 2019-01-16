
<?php

$result_empresa = "SELECT * FROM usuarios ORDER BY 'id'";
$resultado = mysqli_query($conn, $result_empresa);


//echo 'Registros encontrados: ' . $query_consulta->num_rows;
//mysqli_close($conexao);
?>	
<div class="container theme-showcase" role="main">      
	<div class="page-header">
		<h1>Lista de Empresas</h1>
	</div>
	<div class="row espaco">
		<div class="pull-right">
			<a href="administrativo.php?link=27"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Nivel de Acesso</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					while ($linhas = mysqli_fetch_array($resultado)) {
						echo "<tr>";
						echo "<td>".$linhas['id']."</td>";
						echo "<td>".$linhas['usu_razao']."</td>";
						echo "<td>".$linhas['usu_email']."</td>";
						echo "<td>".$linhas['usu_nivel']."</td>";
						?>
						<td> 
							<a href='administrativo.php?link=5&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
							
							<a href='administrativo.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
							
							<a href='processa/proc_apagar_usuario.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>

							<a href='administrativo.php?link=34&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Envio do Das</button></a>
							
							<?php
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div> <!-- /container -->

