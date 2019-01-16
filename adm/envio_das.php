<?php
$id = $_GET['id'];
	//Executa consulta

$result = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
$resultado = mysqli_query($conn, $result);

$id = $_SESSION['usuarioId'];
$nome = $_SESSION['usuarioNome'];
$nivel = $_SESSION['usuarioNiveisAcessoId'];
$email = $_SESSION['usuarioEmail'];
$login = $_SESSION['usuarioLogin'];
?>
<div class="container theme-showcase" role="main">      
	<div class="page-header">
		<br><br>	
	</div>
	<?php 
	while ($linhas = mysqli_fetch_array($resultado)) {
					//echo $linhas['id'];
		?>
		
		<div class="row">

			<div class="container">
				<h1 class="page-header">Envio do Das | <?php echo $linhas['usu_login']; ?></h1>
				<div class="table-responsive">

					<div class="col-sm-6 col-md-6">
						<b>Para realizar o envio do DAS por favor informe a data de calculo :</b>
					</div>
				</div>
				<br>
					<div class="col-sm-6 col-md-6">
						<input type="date" class="form-control" name="lan_date">
					</div>


				</div>
				<?php
			}
			?>
				<br>
			<form method="post" action="recebe_upload.php" enctype="multipart/form-data">
				<label>Arquivo:</label>
				
				<input type='file' class='btn btn-sm btn-primary' name="arquivo"/>
				<br>
				<input type="submit" value="Enviar" class="btn btn-success" />
			</form>





		</div> <!-- /container -->
	</div>
</div>

