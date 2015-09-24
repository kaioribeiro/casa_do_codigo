<?php 

include ("../_Funcoes/FuncaoInserir.php");



$id_evento = $_REQUEST['id'];
$estatus = true;

inserir(array("id_usuario", "id_evento","estatus"),
	array($_SESSION['id_google'], $id_evento, $estatus), "convite");

 header("Location: ../convite.php");

 ?>