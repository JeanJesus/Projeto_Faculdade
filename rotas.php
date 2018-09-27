<?php
$item = $_GET['item'];
if($item =="CadastrarCliente"){
    include_once ('CadastrarCliente.php');
    }else{
      include_once "inicial.php";
}
$item = $_GET['item'];
if($item =="CadastrarAdvogados"){
    include_once ('CadastrarAdvogados.php');
    }else{
      include_once "inicial.php";
}
