<!-- Inicio navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="colaborador.php">

				<img src="img/willian.jpg" height="75" width="100" />

			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">            
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="colaborador.php?link=7">Listar Categorias</a></li>
						<li><a href="colaborador.php?link=10">Listar Serviços</a></li>     
						<li><a href="colaborador.php?link=22">Serviços Destaque</a></li> 		
						<li><a href="colaborador.php?link=23">Destacar Serviços </a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carousel <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="colaborador.php?link=25">Listar Carousel</a></li> 
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuração <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="colaborador.php?link=14">Situação</a></li>
					</ul>
				</li>
				<li><a href="colaborador.php?link=35&id=<?php echo $_SESSION['usuarioId']; ?>">Download Das</a></li>
				<li><a href="../index.php">Voltar para o Site</a></li>
				<li><a href="sair.php">Deslogar</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
<!-- Fim navbar -->