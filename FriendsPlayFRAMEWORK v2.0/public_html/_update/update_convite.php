<?php 
session_start();
include ("../_Funcoes/FuncaoAtualizar.php");

$id_convite = $_REQUEST['id_convite'];
$estatus = true;

atualizar(array("estatus"), array($estatus),"convite", "WHERE id_convite = '$id_convite'");

header("Location: ../convites.php");

 ?>