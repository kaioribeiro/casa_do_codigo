<?php 

include ("../_Funcoes/FuncaoInserir.php");


$id = $_REQUEST['id_convite'];
$estatus = true;

inserir(array("estatus"),
	array($estatus), "convite");

 //header("Location: convite.php");

 ?>