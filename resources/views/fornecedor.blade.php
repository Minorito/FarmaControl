@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<HEAD>
<TITLE>Cadastro de Fornecedores</TITLE>
</HEAD>
<BODY>
<?php
$link=mysqli_connect("localhost",'root','coxinha123');
$banco=mysqli_select_db($link, "laravel");
?>

<form name="form" method=POST action = "/fornecedor" class="container" >
<h2>Cadastro de Fornecedores Hoje</h2>
      <input type="hidden" name="_token" value="{{ csrf_token() }} ">
 
      <div class="form-group">
        <input type="text" id="codFornecedor" name="codFornecedor" class="form-control" placeholder="Código">
      </div>

      <div class="form-group">
        <input type="text "id="nome" name="nome" class="form-control" placeholder="Nome">
      </div> 

      <div class="form-group">
        <input id="cnpj" name="cnpj" class="form-control" placeholder="CNPJ">
      </div>
 
      <div class="form-group">
        <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço">
      </div>
 
      <div class="form-group">
        <input type="text" id="cep" name="cep" class="form-control" placeholder="CEP">
      </div>

      <div class="form-group">
        <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone">
      </div>



    <button type=submit class="btn btn-default">Enviar</button>
    <button type=reset class="btn btn-default">Limpar</button>
</form>
<hr>

<?php

$codFornecedor = @$_POST['codFornecedor'];
$nome=@$_POST['nome'];          
$cnpj=@$_POST['cnpj']; 
$endereco = @$_POST['endereco'];
$cep=@$_POST['cep'];         
$telefone=@$_POST['telefone']; 
if(strlen(@$_POST['codFornecedor'])) #insere somente se no form foi escrito o nome
{
    $insert = mysqli_query($link, "INSERT INTO tbfornecedor(codFornecedor,nome,cnpj,endereco,cep,telefone) 
    values('$codFornecedor','$nome','$cnpj','$endereco','$cep','$telefone')");
}
?>
</BODY>
</HTML>
@endsection
