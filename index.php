<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Cadastro de Avisos</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark mb-2">
  <a class="navbar-brand" href="#">Cadastro de Avisos</a>
</nav>
<div class="container " >
<form method="POST">
<label for="aviso"  class="font-weight-bold mb-2" >Titulo do Aviso :</label>

<input type="text" name="titulo" class="form-control mb-2" placeholder="Título " >


<label for="aviso" class="font-weight-bold" >Descrição :</label>

<textarea class="form-control mb-2" name="descricao" rows="4"  ></textarea>

<button type="submit" class="btn  btn-primary">Salvar</button>
<a href="?comando=limparLista" class="btn  btn-danger">Limpar Lista</a>
</form><br>

</body>
<?php
    require 'Aviso.php';
    require 'Funcoes.php';

    listarAvisos();
?>
</html>
