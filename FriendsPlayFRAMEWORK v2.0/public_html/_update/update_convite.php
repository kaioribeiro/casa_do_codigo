<?php 
session_start();
include ("../_Funcoes/FuncaoAtualizar.php");
include ("../_Funcoes/FuncaoSelect.php");


$id_convite = $_REQUEST['id_convite'];
$id_evento = $_REQUEST['id_evento'];
$estatus = true;

$consula = select("evento","num_atual","WHERE id_evento = '$id_evento'",null,null);
$contador = $consula + 1;

atualizar(array("estatus"), array($estatus),"convite", "WHERE id_convite = '$id_convite'");

atualizar(array("num_atual"), array($contador),"evento", "WHERE id_evento = '$id_evento'");

header("Location: ../convites.php");

 ?>