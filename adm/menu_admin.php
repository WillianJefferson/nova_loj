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
			<a class="navbar-brand" href="administrativo.php">

				<img src="img/willian.jpg" height="75" width="100" />

			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">            
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresas <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="administrativo.php?link=28">Listar</a></li>
						<li><a href="administrativo.php?link=27">Cadastrar</a></li>                
						<li><a href="administrativo.php?link=18">Nivel de Acesso</a></li>   
						<li><a href="administrativo.php?link=26">Mensagens</a></li>   
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Faturamento <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="administrativo.php?link=30">Listar</a></li>
						<li><a href="administrativo.php?link=31">Declarar</a></li>                   
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Simples Nacional <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="administrativo.php?link=33">Acessar</a></li>
					</ul>
				</li>
				<li><a href="administrativo.php?link=35&id=<?php echo $_SESSION['usuarioId']; ?>">Envio Das</a></li>
				<li><a href="../index.php">Voltar para o Site</a></li>
				<li><a href="sair.php">Deslogar</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
<!-- Fim navbar -->