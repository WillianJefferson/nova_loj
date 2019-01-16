
<script type="text/javascript" src="js/jquery.mask.min.js"/></script>

<div class="container theme-showcase" role="main">      
  <div class="page-header">
     <h1>Cadastrar Empresa</h1>
 </div>
 <div class="row espaco">
  <div class="pull-right">
   <a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
</div>
</div>
<div class="row">
	<div class="col-md-12">
       <form class="form-horizontal" method="POST" action="processa/proc_cad_empresa.php">
           <h4 class="col-sm-12 col-lg-12 col-md-12 text-primary">
            <i class="glyphicon glyphicon-list-alt"></i> Dados Gerais</h4>

            <div class="required form-group col-sm-4 col-lg-4 col-md-4">
                <label>Tipo de Pessoa</label>
                <select name="usu_tipo" id="usu_tipo" class="form-control" autocomplete="off">
                    <option value="1" selected="selected">Pessoa Jurídica</option>
                    <option value="2">Pessoa Física</option>
                </select>
            </div>

            <div class="required form-group col-sm-4 col-lg-4 col-md-4">
                <label>Nome Fantasia</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div id="pessoa-fisica" class="tipo-pessoa none" style="display: none;">
              <div class="form-group col-sm-4 col-md-4 col-lg-4">
                <label>CPF</label>
                <input name="cpf" class="form-control" maxlength="14" autocomplete="off" type="text" id="cpf" disabled="disabled">
            </div>
            <div class="form-group col-sm-4 col-md-4 col-lg-4">
                <label>RG</label>
                <input name="rg" class="form-control" maxlength="30" autocomplete="off" type="text" id="rg" disabled="disabled">
            </div>                    
            <div class="form-group col-sm-4 col-lg-4 col-md-4">
             <label>Ins. Estadual</label>
             <div class="input-group">
                <input name="ie" class="form-control" maxlength="18" autocomplete="off" type="text" id="ie" disabled="disabled">
            </div>
        </div>
    </div>

    <div id="pessoa-juridica" class="tipo-pessoa none" style="display: block;">
     <div class="form-group col-sm-4 col-lg-4 col-md-4">
      <label>Razão Social</label>
      <input name="usu_razao" id="usu_razao" class="form-control" maxlength="60" autocomplete="off" type="text">
  </div>                
  <div class="form-group col-sm-4 col-lg-4 col-md-4">
    <label>CNPJ</label>
    <input name="usu_cnpj" id="usu_cnpj" class="form-control" maxlength="20" autocomplete="off" type="text">
</div>
<div class="form-group col-sm-4 col-lg-4 col-md-4">
    <label>Ins. Estadual</label>
    <input name="usu_ins_estadual" id="usu_ins_estadual" class="form-control" maxlength="20" autocomplete="off" type="text" onkeyup="somenteNumeros(this);">
</div>
</div>
<div class="form-group col-sm-4 col-lg-4 col-md-4">
 <label>Ins. Municipal</label>
 <input name="usu_ins_municipal" id="usu_ins_municipal" class="form-control" maxlength="20" autocomplete="off" type="text" onkeyup="somenteNumeros(this);">
</div>
<div class="form-group col-sm-4 col-lg-4 col-md-4">
    <label>Receita Bruta</label>
    <input name="usu_receita_bruta" id="usu_receita_bruta" class="form-control" maxlength="60" autocomplete="off" type="text" onkeyup="somenteNumeros(this);">                       
</div>
<div class="form-group col-sm-4 col-lg-4 col-md-4">
 <label>Regime Tributário</label>
 <select name="usu_regime_trib" id="usu_regime_trib" class="form-control" autocomplete="off">
     <option value="">Selecione</option>
     <option value="1">Simples Nacional</option>
     <option value="2">Simples Nacional - excesso de sublimite de receita bruta</option>
     <option value="3">Regime Normal</option>
 </select>
</div>
<div class="form-group col-sm-4 col-lg-4 col-md-4">
 <label>Regime Especial de Tributação</label>
 <select name="usu_regime_esp" id="usu_regime_esp" class="form-control" autocomplete="off">
     <option value="">Selecione</option>
     <option value="1">Microempresa Municipal</option>
     <option value="2">Estimativa</option>
     <option value="3">Sociedade de Profissionais</option>
     <option value="4">Cooperativa</option>
     <option value="5">Microempresário Individual (MEI)</option>
     <option value="6">Microempresário e Empresa de Pequeno Porte (MEEPP)</option>
     <option value="0">Sem Regime</option>
 </select>
</div>
</div>

<h4 class="col-sm-12 col-lg-12 col-md-12 text-primary"><i class="glyphicon glyphicon-book"></i> Contato</h4>
<div class="required form-group col-sm-4 col-lg-4 col-md-4">
    <label>Login</label>
    <input name="usu_login" id="usu_login" type="text" class="form-control" autocomplete="off">
</div>
<div class="required form-group col-sm-4 col-lg-4 col-md-4">
    <label>Telefone</label>
    <input name="usu_telefone" id="usu_telefone" class="form-control" maxlength="50" autocomplete="off" type="text">

</div>
<div class="form-group col-sm-4 col-lg-4 col-md-4">
    <label>E-mail</label>
    <input name="usu_email" id="usu_email" type="email" class="form-control">
</div>
<div class="form-group col-sm-4 col-lg-4 col-md-4">
    <label>Senha</label>
    <input name="usu_senha" id="usu_senha" type="password" class="form-control" autocomplete="off">
</div>
<div class="form-group col-sm-4 col-lg-4 col-md-4">
    <label>Plano Selecionado</label>
    <select class="form-control" name="usu_plano">
       <option value="1">Basico 1</option>
       <option value="2">Basico 2</option>
       <option value="3">Basico 3</option>
       <option value="4">Basico 4</option>
   </select>  
</div>              

<h4 class="col-sm-12 col-lg-12 col-md-12 text-primary"><i class="glyphicon glyphicon-map-marker margin-right-5px"></i> Endereço</h4>

<div class="required form-group col-sm-4 col-lg-4 col-md-4">
    <label>CEP</label>
    <input name="usu_cep" id="usu_cep" class="form-control" maxlength="10" autocomplete="off" type="text" onblur="pesquisacep(this.value);">
</div>
<div class="required form-group col-sm-4 col-lg-4 col-md-4">
    <label>Logradouro</label>
    <input name="usu_log" id="usu_log" class="form-control" maxlength="200" autocomplete="off" type="text" >
</div>
<div class="required form-group col-sm-4 col-lg-4 col-md-4">
    <label>Número</label>
    <input name="usu_num" id="usu_num" class="form-control" maxlength="10" autocomplete="off" type="text">
</div>
<div class="form-group col-sm-4 col-lg-4 col-md-4">
    <label>Complemento</label>
    <input name="usu_com" id="usu_com" class="form-control" maxlength="20" autocomplete="off" type="text">
</div>
<div class="required form-group col-sm-4 col-lg-4 col-md-4">
    <label>Bairro</label>
    <input name="usu_bairro" id="usu_bairro" class="form-control" maxlength="45" autocomplete="off" type="text">
</div>
<div class="required form-group col-sm-4 col-lg-4 col-md-4">
    <label>Cidade</label>
    <input type="text" name="usu_cid" id="usu_cid" class="col-sm-12 col-lg-12 col-md-12 form-control" autocomplete="off" style="outline: none;">

    <input name="data[Loja][cidade_id]" class="cidade form-control" autocomplete="off" type="text" id="LojaCidadeId" style="display: none;"></div>

    <input type="hidden" name="usu_nivel" value="1" id="usu_nivel">

    <div class="both col-sm-12 col-lg-12 col-md-12 margin-top-10px">
        <button class="btn btn-success btn-responsive" type="submit">
         <span class="glyphicon glyphicon-ok margin-right-10px"></span> Cadastrar</button>                    
         <a href="#" class="btn btn-danger btn-responsive">
          <span class="glyphicon glyphicon-remove margin-right-10px"></span> Cancelar</a>                
      </div>

  </form>

</div>
</div>
</div> <!-- /container -->
