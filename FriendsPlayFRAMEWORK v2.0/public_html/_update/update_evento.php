<?php 

include ("../_Funcoes/FuncaoAtualizar.php");

$id = $_REQUEST['nid'];
$data = $_REQUEST['data'];
//$hora = $_REQUEST['hora'];
// $hora_final = $_REQUEST['horaf'];	
$numeroMaximo = $_REQUEST['nNumMax'];
$numeroMinimo = $_REQUEST['nNumMin'];
// $privacidade = $_REQUEST['nPrivacidade'];


atualizar(array("data","n_min","n_max"), array($data,$numeroMinimo,$numeroMaximo),"evento", "WHERE id_evento = '$id'");

 ?>