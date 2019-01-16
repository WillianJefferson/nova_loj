<?php
	//recuperar o id passado pela url
	$url = (isset($_GET['url'])) ? $_GET['url']:'';	
	$explode = explode('/',$url);
	$produto_id = $explode[1];
	
	//Consultar os produtos conforme a categoria
	$resultado_prod = "SELECT * FROM produtos WHERE id='$produto_id' LIMIT 1";
	$result_prod = mysqli_query($conn, $resultado_prod);

  while ($linhas_prod = mysqli_fetch_array($result_prod)) {

	$imagem = pg.'/foto/'.$linhas_prod['imagem']; 
	//echo $linhas_prod['nome'];	
?>
	<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
		<h1><?php echo $linhas_prod['nome']; ?></h1>
      
      


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">      

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><?php echo $linhas_prod['nome']; ?></h2>
		  
          <p class="lead"><?php echo $linhas_prod['descricao_curta']; ?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="<?php echo $imagem; ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-12">
          <p class="lead"><?php echo $linhas_prod['descricao_longa']; ?></p>
        </div>
        <?php } ?>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <footer>
        <p>&copy; Mundo do Negocio 2018</p>
      </footer>
    </div> <!-- /container -->