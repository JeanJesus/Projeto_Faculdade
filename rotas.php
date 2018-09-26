<?php
$item = $_GET['item'];
if($item =="CadastrarCliente"){
    include_once ('CadastrarCliente.php');
    }else{
      include_once "inicial.php";
}
$item = $_GET['item'];
if($item =="BlankPage"){
    include_once ('blank.php');
    }else{
      include_once "inicial.php";
}
