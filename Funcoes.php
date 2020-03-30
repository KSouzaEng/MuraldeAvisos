<?php

session_start();

if(!isset($_SESSION['avisos'])):
    $_SESSION['avisos'] = array();
endif;
if (isset($_POST['titulo'])) :

    $aviso = new Aviso();
    $aviso->setTitulo($_POST['titulo']);
    $aviso->setDescricao($_POST['descricao']);

    array_push($_SESSION['avisos'], array(
    'titulo' => $aviso->getTitulo(),
    'descricao' => $aviso->getDescricao()
));
header('Location: /PaineldeAvisos/');
endif;

//var_dump($_POST);

function listarAvisos()
{
    echo "<table class='table table-bordered table table-striped'>";
    echo "<tr>";
    echo "<th>Titulo</th>";;
    echo "<th>Descrição</th>";
    echo "<th>Ações</th>";
    echo "</tr>";
    foreach($_SESSION['avisos'] as $key => $value)
    {
        echo "<tr>";
        echo "<td>" . $value['titulo']."</td>";
        echo "<td>" . $value['descricao']."</td>" ;
        echo "<td><br><a href='?comando=excluir&id=".$key."'class='btn btn-sm btn-danger'>Excluir</a></td>";
        echo "</tr>";
        
    }
    echo "</table>";

    if (isset($_GET['comando'])) {
        if ($_GET['comando'] == 'limparLista') {
            $_SESSION['avisos'] = array();
        }
    
        if($_GET['comando']== 'excluir'){
    
            array_splice($_SESSION['avisos'],$_GET['id'],1);
        }
    
        header('Location: /PaineldeAvisos/');
    }
}