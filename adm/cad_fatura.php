<script type="text/javascript">
function SubstituiVirgulaPorPonto(campo){	
campo.value = campo.value.replace(/,/gi, ".");}
</script>

<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Declaração Mensal</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_cad_fatura.php" name="calc">
	  <?php
	  $nome = $_SESSION["usuarioNome"];
	  ?>
		  <div class="form-group">
			<label for="lan_usu_id" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="lan_usu_id" readonly="true" value="<?php echo $nome; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="lan_date" class="col-sm-2 control-label">Data</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="lan_date">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="lan_valor" class="col-sm-2 control-label">Valor do Faturamento</label>
			<div class="col-sm-10">
			<input type="Text" class="form-control" name="lan_valor" id="lan_valor" onkeyup="SubstituiVirgulaPorPonto(this)">
			</div>
		  </div>
	 </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

