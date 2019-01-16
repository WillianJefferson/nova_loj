<?php
include_once("adm/conexao.php");

$result_sql = "SELECT * FROM carousels ORDER BY ordem asc LIMIT 3";
$resultado = mysqli_query($conn, $result_sql);
$linhas = $resultado->num_rows;
$contr_sob = $linhas;
	/*
	$resultado=mysql_query("SELECT * FROM carousels ORDER BY ordem asc LIMIT 3");
	$linhas=mysql_num_rows($resultado);
	$contr_sob = $linhas;*/
	?>	
	<!-- Carousel
		================================================== -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<?php 
				$controle = 1;
				while ($linhas = mysqli_fetch_array($resultado)) {
					$imagem = pg.'/imagens/'.$linhas['imagem']; 
					
					if($controle == 1){ ?>
						<div class="item active">
							<a href="<?php echo $linhas['url'];?>"><img class="first-slide" src="<?php echo $imagem;?>" alt="First slide"></a>
						</div>
					<?php }elseif($controle == 2){?>
						<div class="item">
							<a href="<?php echo $linhas['url'];?>"><img class="second-slide" src="<?php echo $imagem;?>" alt="First slide"></a>
						</div>
					<?php }elseif($controle == 3){?>
						<div class="item">
							<a href="<?php echo $linhas['url'];?>"><img class="third-slide" src="<?php echo $imagem;?>" alt="First slide"></a>
						</div>
					<?php }
					$controle = $controle + 1;
				} ?>
			</div>
			
		</div><!-- /.carousel -->
		
    <!-- Marketing messaging and featurettes
    	================================================== -->
    	<!-- Wrap the rest of the page in another container to center all the content. -->
    	<?php
	//Pesquisar o id dos produtos em destaque no nivel 1 página principal
    	$resultado_prod_dest = "SELECT * FROM destaques_produtos WHERE nivel_um='1' ORDER BY ordem ASC";
    	$linhas_prod_dest = mysqli_query($conn, $resultado_prod_dest);
    	
    	?>
    	<div class="container marketing">
    		<br>
    		<h1>Serviços em destaque</h1>
    		<br>
    		<!-- Three columns of text below the carousel -->
    		<div class="row">
    			<?php 
    			while($linhas2 = mysqli_fetch_array($linhas_prod_dest)){ 
				//id do produto na tabela produto em destaque
    				$produto_id = $linhas2['produto_id'];
    				$produto_dest_id = $linhas2['id'];
    				
				//Selecionar os dados do produto no BD
    				$resultado_prod = "SELECT * FROM produtos WHERE id='$produto_id' LIMIT 1";
    				$linhas_prod = mysqli_query($conn, $resultado_prod);


    				while($linhas2 = mysqli_fetch_array($linhas_prod)){

    					
    					$imagem = pg.'/foto/'.$linhas2['imagem']; 
    					?>
    					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    						<img class="img-circle" src="<?php echo $imagem; ?>" alt="Generic placeholder image" width="140" height="140">
    						<h2><?php echo $linhas2['nome']; ?></h2>
    						<p><?php echo $linhas2['descricao_curta']; ?></p>
    						<p><a class="btn btn-default" href="<?php echo pg.'/detalhe_produto/'.$linhas2['id'].'/'.$linhas2['slug']; ?>" role="button">Mais detalhes &raquo;</a></p>
    					</div><!-- /.col-lg-4 -->   
    				<?php }} ?>
    			</div><!-- /.row -->


    			<!-- START THE FEATURETTES -->

    			<hr class="featurette-divider">
    			<?php
		//Pesquisar o id dos produtos em destaque no nivel 1 página principal

    			$resultado_prod_dest = "SELECT * FROM destaques_produtos WHERE nivel_dois='1' ORDER BY ordem ASC LIMIT 3";
    			$linhas_prod_dest = mysqli_query($conn, $resultado_prod_dest);
    			
    			?>
    			<?php 
		//imprime produtos lista baixa destaque
    			$controle = 0;	
    			while($linhas_prod_2 = mysqli_fetch_array($linhas_prod_dest)){ 
			//id do produto na tabela produto em destaque
    				$produto_id = $linhas_prod_2['produto_id'];
    				$produto_dest_id = $linhas_prod_2['id'];
    				
			//Selecionar os dados do produto no BD
    				$resultado_prod = "SELECT * FROM produtos WHERE id='$produto_id' LIMIT 1";
    				$linhas_prod = mysqli_query($conn, $resultado_prod);

    				while($linhas_prod_f = mysqli_fetch_array($linhas_prod)){ 

    					$imagem = pg.'/foto/'.$linhas_prod_f['imagem']; 
    					
    					if($controle == 0){
    						?>
    						<div class="row featurette">
    							<div class="col-md-7">
    								<h2 class="featurette-heading"><?php echo $linhas_prod_f['nome']; ?></h2>
    								<p class="lead"><?php echo $linhas_prod_f['descricao_curta']; ?></p>
    							</div>
    							<div class="col-md-5">
    								<img class="featurette-image img-responsive center-block" src="<?php echo $imagem; ?>" alt="Generic placeholder image">
    							</div>
    						</div>

    						<hr class="featurette-divider">
    						<?php $controle = 1; 
    					}else{ ?>
    						<div class="row featurette">
    							<div class="col-md-7 col-md-push-5">
    								<h2 class="featurette-heading"><?php echo $linhas_prod_f['nome']; ?></h2>
    								<p class="lead"><?php echo $linhas_prod_f['descricao_curta']; ?></p> 
    							</div>
    							<div class="col-md-5 col-md-pull-7">
    								<img class="featurette-image img-responsive center-block" src="<?php echo $imagem; ?>" alt="Generic placeholder image">
    							</div>
    						</div>
    						<hr class="featurette-divider">
    						<?php $controle = 0; 
    					} ?>
    				<?php } } ?>

    				

    				<!-- /END THE FEATURETTES -->


    				<footer>
    					<p>&copy; Mundo do Negocio 2018</p>
    				</footer>
    			</div> <!-- /container -->

