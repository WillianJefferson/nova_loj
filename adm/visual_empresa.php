<?php
	$id = $_GET['id'];
	//Executa consulta

	$result = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
	$resultado = mysqli_query($conn, $result);
?>
<div class="container theme-showcase" role="main">      
	<div class="page-header">
		<h1>Visualizar Empresa</h1>
	</div>
	<?php 
				while ($linhas = mysqli_fetch_array($resultado)) {
					//echo $linhas['id'];
	?>
	<div class="row">
		<div class="pull-right">
			<a href='administrativo.php?link=2&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
							
			<a href='administrativo.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
			
			<a href='processa/proc_apagar_empresa.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
	
	<div class="row">

		<div class="container">
  <h1 class="page-header">Tabelas com Bootstrap</h1>
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
      <tr>
        <th>#</th>
        <th>Coluna 01</th>
        
        
      </tr>
      </thead>
      <tbody>
        <tr>
          <th><b>Id:</b></th>
          <td><?php echo $linhas['id']; ?></td>
        </tr>
        <tr>
          <th><b>Tipo:</b></th>
          <td><?php echo $linhas['usu_tipo']; ?></td>
        </tr>
        <tr>
          <th><b>Responsavel:</b></th>
          <td><?php echo $linhas['usu_nome']; ?></td>
        </tr>
        <tr>
          <th><b>Razão:</b></th>
          <td><?php echo $linhas['usu_razao']; ?></td>
        </tr>
        <tr>
          <th><b>cnpj:</b></th>
          <td><?php echo $linhas['usu_cnpj']; ?></td>
        </tr>
        <tr>
          <th><b>ins_estadual:</b></th>
          <td><?php echo $linhas['usu_ins_estadual']; ?></td>
        </tr>
        <tr>
          <th><b>ins_municipal:</b></th>
          <td><?php echo $linhas['usu_ins_municipal']; ?></td>
        </tr>
        <tr>
          <th><b>receita_bruta:</b></th>
          <td><?php echo $linhas['receita_bruta']; ?></td>
        </tr>
        <tr>
          <th><b>regime_trib:</b></th>
          <td><?php echo $linhas['usu_regime_trib']; ?></td>
        </tr>
        <tr>
          <th><b>regime_esp:</b></th>
          <td><?php echo $linhas['usu_regime_esp']; ?></td>
        </tr>
        <tr>
          <th><b>login:</b></th>
          <td><?php echo $linhas['usu_login']; ?></td>
        </tr>
        <tr>
          <th><b>telefone:</b></th>
          <td><?php echo $linhas['usu_telefone']; ?></td>
        </tr>
        <tr>
          <th><b>E-mail:</b></th>
          <td><?php echo $linhas['usu_email']; ?></td>
        </tr>
        <tr>
          <th><b>senha:</b></th>
          <td><?php echo $linhas['usu_senha']; ?></td>
        </tr>
        <tr>
          <th><b>plano:</b></th>
          <td><?php echo $linhas['usu_plano']; ?></td>
        </tr>
        <tr>
          <th><b>Nivel:</b></th>
          <td><?php echo $linhas['usu_nivel']; ?></td>
        </tr>
        <tr>
          <th><b>cep:</b></th>
          <td><?php echo $linhas['usu_cep']; ?></td>
        </tr>
        <tr>
          <th><b>Logradouro:</b></th>
          <td><?php echo $linhas['usu_log']; ?></td>
        </tr>
        <tr>
          <th><b>num:</b></th>
          <td><?php echo $linhas['usu_num']; ?></td>
        </tr>
        <tr>
          <th><b>com:</b></th>
          <td><?php echo $linhas['usu_com']; ?></td>
        </tr>
        <tr>
          <th><b>E-mail:</b></th>
          <td><?php echo $linhas['usu_email']; ?></td>
        </tr>
        <tr>
          <th><b>E-mail:</b></th>
          <td><?php echo $linhas['usu_email']; ?></td>
        </tr>
        <tr>
          <th><b>E-mail:</b></th>
          <td><?php echo $linhas['usu_email']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


			
			<div class="col-sm-3 col-md-1">
				<b>Usuário:</b>
			</div>
			<div class="col-sm-9 col-md-11">
				<?php echo $linhas['usu_login']; ?>
			</div>
			
			<div class="col-sm-3 col-md-1">
				<b>Nivel de Acesso:</b>
			</div>
			<div class="col-sm-9 col-md-11">
				<?php echo $linhas['usu_nivel']; ?>
			</div>
		
	</div>

	<?php
	}
	?>
</div> <!-- /container -->

