<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Página Administrativa">
	<meta name="author" content="Willian Jefferson">
	<link rel="icon" href="imagens/favicon.ico">

	<title>Administrativo</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>

</head>

<body role="document">
	<?php
	include_once("menu_colaborador.php");
	
	if (isset($_GET["link"])) {
		$link = $_GET["link"];
	}
	
	$pag[1] = "bem_vindo.php";
	$pag[2] = "listar_empresa.php";
	$pag[3] = "cad_usuario.php";
	$pag[4] = "editar_empresa.php";		
	$pag[5] = "visual_empresa.php";
	$pag[6] = "cad_categoria.php";
	$pag[7] = "listar_categoria.php";
	$pag[8] = "visual_categoria.php";
	$pag[9] = "editar_categoria.php";
	$pag[10] = "listar_produto.php";
	$pag[11] = "cad_produto.php";
	$pag[12] = "visual_produto.php";
	$pag[13] = "editar_produto.php";
	$pag[14] = "listar_situacao.php";
	$pag[15] = "cad_situacao.php";
	$pag[16] = "visual_situacao.php";
	$pag[17] = "editar_situacao.php";
	$pag[18] = "listar_nivel_acesso.php";
	$pag[19] = "cad_nivel_acesso.php";
	$pag[20] = "visual_nivel_acesso.php";
	$pag[21] = "editar_nivel_acesso.php";
	$pag[22] = "listar_destaque_produto.php";
	$pag[23] = "cad_destaque_prod.php";
	$pag[24] = "cad_carousel.php";
	$pag[25] = "listar_carousel.php";
	$pag[26] = "listar_mensagem_contato.php";
	$pag[27] = "cad_empresa.php";
	$pag[28] = "listar_empresa.php";
	$pag[32] = "listar_fatura.php";
	$pag[31] = "cad_fatura.php";
	$pag[30] = "cad_lancamento.php";
	$pag[33] = "cad_simples.php";
    $pag[34] = "envio_das.php";
    $pag[35] = "download_das.php";

	
	
	if(!empty($link)){
		if(file_exists($pag[$link])){
			include $pag[$link];
		}else{
			include "bem_vindo.php";
		}
	}else{
		include "bem_vindo.php";
	}
	
	?>
	
	


    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="js/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/docs.min.js"></script>
    	<script src="js/ckeditor/ckeditor.js"></script>
    	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<script src="js/ie10-viewport-bug-workaround.js"></script>

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>


    	<script>
    		$(document).ready(function () { 
    			var $usu_telefone = $("#usu_telefone");
    			$usu_telefone.mask('(00) 00000-0009', {reverse: false});
    		});


    		$(document).ready(function () { 
    			var $usu_cep = $("#usu_cep");
    			$usu_cep.mask('99999-999', {reverse: false});
    		});


    		$("#usu_cnpj").keydown(function(){
    			try {
    				$("#usu_cnpj").unmask();
    			} catch (e) {}

    			var tamanho = $("#usu_cnpj").val().length;

    			if(tamanho < 11){
    				$("#usu_cnpj").mask("999.999.999-99");
    			} else if(tamanho >= 11){
    				$("#usu_cnpj").mask("99.999.999/9999-99");
    			}

    // ajustando foco
    var elem = this;
    setTimeout(function(){
        // mudo a posição do seletor
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    // reaplico o valor para mudar o foco
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});





    		function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('usu_log').value=("");
            document.getElementById('usu_bairro').value=("");
            document.getElementById('usu_cid').value=("");
        }

        function meu_callback(conteudo) {
        	if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('usu_log').value=(conteudo.logradouro);
            document.getElementById('usu_bairro').value=(conteudo.bairro);
            document.getElementById('usu_cid').value=(conteudo.localidade);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('usu_log').value="...";
                document.getElementById('usu_bairro').value="...";
                document.getElementById('usu_cid').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };





    function somenteNumeros(num) {
    	var er = /[^0-9.]/;
    	er.lastIndex = 0;
    	var campo = num;
    	if (er.test(campo.value)) {
    		campo.value = "";
    	}
    }



    $(document).ready(function () { 
    	var $lan_date_inicial = $("#lan_date_inicial");
    	$lan_date_inicial.mask('00/00/0000', {reverse: false});
    });


    $(document).ready(function () { 
    	var $lan_date_final = $("#lan_date_final");
    	$lan_date_final.mask('00/00/0000', {reverse: false});
    });




</script>
</body>
</html>
