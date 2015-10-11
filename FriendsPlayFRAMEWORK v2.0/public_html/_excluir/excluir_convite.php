<?php 
include ("../_Funcoes/FuncaoDelete.php");

$id = $_REQUEST['id_convite'];

deleta("convite", "where id_convite = '$id'");

header("Location: ../convites.php");	

 ?>