<?php 

include ("../_Funcoes/FuncaoInserir.php");


$id = $_REQUEST['id'];
$id_evento = $_REQUEST['id_evento'];
$estatus = false;

inserir(array("estatus","id_usuario","id_evento"),
	array($estatus,$id,$id_evento), "convite");

 header("Location: ../convites.php");

 ?>