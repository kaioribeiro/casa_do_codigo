<?php 
session_start();
include ("../_Funcoes/FuncaoAtualizar.php");
include ("../_Funcoes/FuncaoSelectInsert.php");


$id_convite = $_REQUEST['id_convite'];
$id_evento = $_REQUEST['id_evento'];
$estatus = true;

$consulta = select("evento","*","WHERE id_evento = $id_evento",null,null);

$i = $consulta[0]['num_atual']+1;



atualizar(array("estatus"), array($estatus),"convite", "WHERE id_convite = '$id_convite'");

atualizar(array("num_atual"), array($i),"evento", "WHERE id_evento = '$id_evento'");

header("Location: ../convites.php");

 ?>