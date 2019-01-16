<?php	
	$resultado_menu = "SELECT * FROM categorias ORDER BY 'id'";
	$result_menu = mysqli_query($conn , $resultado_menu);
?>	
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="#">Mundo do Negocio</a>
	</div>
	
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		<li><a href="<?php echo pg.'/home'; ?>">Inicio</a></li>            
		<li class="dropdown">
		  <a href="produto.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<?php 
				//lista as categorias de produto
				while($linhas_m = mysqli_fetch_array($result_menu)){
				?><li><a href="<?php echo pg.'/produto/'.$linhas_m['id'].'/'.$linhas_m['slug']; ?>"><?php echo $linhas_m['nome']; ?></a></li>	
			<?php } //fim lista as categorias de produto?>			
		  </ul>
		</li>
		<li><a href="<?php echo pg.'/empresa'; ?>">Empresa</a></li>
		<li><a href="<?php echo pg.'/planos'; ?>">Planos</a></li>
		<li><a href="<?php echo pg.'/envio'; ?>">Envio</a></li>
		<li><a href="<?php echo pg.'/contato'; ?>">Contato</a></li>
		<li><a href="<?php echo pg.'/adm'; ?>">Entrar</a></li>
	  </ul>
	</div><!--/.nav-collapse -->
  </div>
</nav>
	