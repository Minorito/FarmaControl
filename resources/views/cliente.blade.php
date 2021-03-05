@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<HEAD>
<TITLE>Cadastro de Clientes</TITLE>
</HEAD>
<BODY>
<?php
$link=mysqli_connect("localhost",'root','coxinha123');
$banco=mysqli_select_db($link, "laravel");
?>

<form name="form" method=POST action = "/cliente" class="container" >
<h2>Cadastro de Clientes</h2>
      <input type="hidden" name="_token" value="{{ csrf_token() }} ">
 
      <div class="form-group">
        <input type="text" id="codCliente" name="codCliente" class="form-control" placeholder="Código">
      </div>

      <div class="form-group">
        <input type="text "id="nomeCliente" name="nomeCliente" class="form-control" placeholder="Nome">
      </div> 

      <div class="form-group">
        <input id="cpf" name="cpf" class="form-control" placeholder="CPF">
      </div> 
      
      <div class="form-group">
        <input type="text" id="celular" name="celular" class="form-control" placeholder="Celular">
      </div>



    <button type=submit class="btn btn-default">Enviar</button>
    <button type=reset class="btn btn-default">Limpar</button>
</form>
<hr>

<?php

$codFornecedor = @$_POST['codCliente'];
$nomeFornecedor=@$_POST['nomeCliente'];          
$cnpj=@$_POST['cpf'];       
$celular=@$_POST['celular']; 
if(strlen(@$_POST['codCliente'])) #insere somente se no form foi escrito o nome
{
    $insert = mysqli_query($link, "INSERT INTO tbcliente(codCliente,nomeClientecelular) 
    values('$codCliente','$nomeCliente','$cpf', '$celular')");
}
?>
</BODY>
</HTML>
@endsection
