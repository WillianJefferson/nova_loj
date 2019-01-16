
<?php/*
var $quantidadeRegistro = 5000; //quantiade registro no banco

var $limit = 1000; 
var $offset = 0;

var $select = "";

//criar os select no banco
for($i = 1; $i <= $quantidadeRegistro ; $i += 1000){ 
    $select = $select + "select * from [tabela] limit " . $limit . " offset " . offset;
}

$offset = $limit;

if($quantidadeRegistro > $limit){
    $limit = $limit + 1000;
} else {
    $limit = $limit + ($quantidadeRegistro - $limit);
}

*/

	session_start();
//include_once("../seguranca.php");
include_once("../conexao.php");


$lan_usu_id 					= "6";
$lan_date_ini    				= $_POST["lan_date_inicial"];
$lan_date_fin   				= $_POST["lan_date_final"];

$mes = '07' ;
//date_format(lan_date, '%d/%m/%Y');
/*


$result_empresa = "SELECT * FROM lancamentos WHERE 'lan_usu_id' = $lan_usu_id" AND 'lan_date' = $lan_date ;

$resultado_empresa = mysqli_query($conn, $result_empresa);WHERE column_name BETWEEN value1 AND value2;
/****************************************************************/
	
	$resultado = "SELECT *,date_format(lan_date, '%d/%m/%Y') as lan_date_inicial 
	FROM lancamentos WHERE lan_date BETWEEN '$lan_date_ini' AND '$lan_date_fin'" ;
	$result_linhas = mysqli_query($conn, $resultado);

	$resultado = "SELECT * FROM  lancamentos ORDER BY 'lan_id'" ;
	$result_linhas_2 = mysqli_query($conn, $resultado);
	/*while($linhas_2 = mysqli_fetch_array($conn, $result_linhas_2)){*/
?>	
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1> Extrato do Simples Nacional </h1>
  </div>
  <div class="row espaco"></div>
  <div class="row">
	<div class="col-md-12">
	  <table class="table">
	  	<?php /*echo $lan_date_inicial date_format(lan_date, '%d/%m/%Y');;
	  	echo $lan_date_final;*/ ?>

		
				
				<p>Gerado em 00/00/00 10:41:17</p>
				<p>Apurado em 00/00/00 12:16:16</p>
				<p>Apuração Original</p>
                <p>PGDAS-D 2018 Versão 1.1.10</p>
            

        <h3>1) Informações do Contribuinte</h3>
			<table border="1" class="table">
    			<tr>
        			<td>CNPJ Básico: 26.753.074</td>
        			<td>Nome Empresarial: AYX ESTACIONAMENTO LTDA</td>
        		</tr>
				<tr>
			        <td>Data de Abertura: 22/12/2016</td>
			        <td>Regime de Apuração: Competência</td>
			        <td>Optante pelo Simples Nacional: Sim</td>
    			</tr>
            </table>
		<h3>2) Informações da Apuração 26753074201807001</h3>
        <p> Período de Apuração (PA) : 07/2018</p>
		<h3>2.1 Discriminativo de Receitas </h3>

			<table border="1" class="table">
			    <tr>
			        <td>Total de Receitas Brutas (R$)</td>
			        <td>Mercado Interno</td>
			        <td>Mercado Externo</td>
			        <td>Total</td>
			    </tr>
				<tr>
			        <td>Receita Bruta do PA (RPA) - Competência</td>
			        <td>4.639,00</td>
			        <td>0,00</td>
			        <td>4.639,00</td>
			    </tr>
				<tr>
			    	<td>Receita bruta acumulada no doze meses anteriores ao PA (RBT12)</td>
			    	<td><?php echo $linhas['id']; ?></td>
			    	<td>0,00</td>
			    	<td>50.770,00</td>
			    </tr>
				<tr>
			    	<td>Receita bruta acumulada no doze meses anteriores ao PA proporcionalizada (RBT12P)</td>
			    	<td>        </td>
			    	<td>        </td>
			    	<td>        </td>
			    </tr>
				<tr>
			    	<td>Receita bruta acumulada no ano-calendário corrente (RBA)</td>
			    	<td>30.647,00</td>
			    	<td>0,00</td>
			    	<td>30.647,00</td>
			    </tr>
				<tr>
			    	<td>Receita bruta acumulada no ano-calendário anterior (RBAA)</td>
			    	<td>29.917,00</td>
			    	<td>0,00</td>
			    	<td>29.917,00</td>
			    </tr>

			    <tr>
			    	<td>Limite de receita bruta proporcionalizada</td>
			    	<td>4.800.000,00</td>
			    	<td>4.800.000,00</td>
			    	<td>            </td>
			    </tr>	
			</table>


      <h3>2.2 Receitas Brutas Anteriores (R$) </h3>
	
	
		

	<table border="1" class="table">
		
	
      	<h3>2.2.1) Mercado Interno</h3>
      	<?php /*
        $mes = date( 'd', strtotime( $linhas['lan_date_inicial'] ) );

        echo $mes;*/

        ?>
        
          
      <?php echo $linhas['lan_date_inicial']; ?>
      <?php echo $linhas['lan_id'];//TROCA DO M PELO D PARA PEGAR MES EM ING ?>

      	<tr>
      		<td> 01/2017</td>
          <?php  ?>
      		<td>
              
          </td>
          <?php  ?>
      		<td> 02/2017</td>
      		<?php  ?>
          <td>
              
          </td>
          <?php  ?>
      		<td> 03/2017</td>
      		<?php  ?>
          <td>
              
          </td>
          <?php  ?>
      		<td> 04/2017</td>
      		<?php  ?>
          <td>
              
          </td>
          <?php  ?>
      	</tr>
        
      	<tr>
      		<td>05/2017</td>
      		<td>2.000,00</td>
      		<td>06/2017</td>
      		<td>3.155,00</td>
      		<td>07/2017</td>
      		<td>3.446,00</td>
      		<td>08/2017</td>
      		<td>4.538,00</td>
      	</tr>

      	<tr>
      		<td>09/2017</td>
      		<td>4080,00</td>
      		<td>10/2017</td>
      		<td>4.512,00</td>
      		<td>11/2017</td>
      		<td>4.384,00</td>
      		<td>12/2017</td>
      		<td>3.802,00</td>
      	</tr>

      	<tr>
      		<td>01/2018</td>
      		<td>4.487,00</td>
      		<td>02/2018</td>
      		<td>4.368,00</td>
      		<td>03/2018</td>
      		<td>4.482,00</td>
      		<td>04/2018</td>
      		<td>4.210,00</td>
      	</tr>

      	<tr>
      		<td>05/2018</td>
      		<td>4.161,00</td>
      		<td>06/2018 </td>
      		<td>4.300,00</td>
      	    <td>        </td>
      	    <td>        </td>
      	    <td>        </td>
      	    <td>        </td>
      	</tr>

	</table>
	

      	<h3>2.3) Folhas de Salários Anteriores (R$)</h3>
      	 <table border="1" class="table">
      	 	<tr>
      	 		<td>Nenhuma</td>
      	 	</tr>
      	 </table>


      	 	<h3>2.4) Fator r</h3>
      	 <table border="1" class="table">
      	 	<tr>
      	 		<td>Fator r = Não se aplica</td>
      	 	</tr>
      	 </table>


      	 <h3>2.5) Valores Fixos</h3>
      	 <table border="1" class="table">
      	 	<tr>
      	 		<td>Não se aplica</td>
      	 	</tr>
      	 </table>


      	 <h3>3) Informações dos Estabelecimentos - valores referentes às Receitas Informadas</h3>
      	 <table border="1" class="table">
      	 	<tr>
      	 		<td>CNPJ: 26.753.074/0001-92</td>
      	 		<td>Localização: ARAPIRACA-AL</td>
      	 		
      	 	</tr>

      	 	<tr>
      	 		<td>Impedido de recolher ICMS/ISS no DAS: Não</td>
      	 		<td>Sublimite de Receita Anual (R$) : 3.600.000,00</td>
      	 	</tr>

      	 	<tr>
      	 		<td>             Receita Informada                 </td>
      	 	</tr>

      	 </table>
		

	  </table>
	</div>
	</div>
</div> <!-- /container -->

