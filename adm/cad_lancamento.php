
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Informe o Mês e o Ano para consulta</h1>
  </div>
  <div class="row espaco">
		
	</div>
  <div class="row">
	<div class="col-md-12">
		<?php $data = date('d/m/Y'); 
				
		?>
	  <form class="form-horizontal" method="POST" action="administrativo.php?link=32">
	  		<h3>Informe o periodo para consultar</h3>
		  <div class="form-group">
			<label for="lan_date_inicial" class="col-sm-2 control-label">Informe a data Inicial</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="lan_date_inicial" id="lan_date_inicial">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="lan_date_final" class="col-sm-2 control-label">Informe a data Final</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="lan_date_final" id="lan_date_final" >
				<!--value="<?php echo $data;?>" -->
			</div>
		  </div>
		 
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Consultar Extrato</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

