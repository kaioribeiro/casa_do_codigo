<?php 
session_start();
include ("../_Funcoes/FuncaoAtualizar.php");

$id_relacao = $_SESSION['id_local'];

$id = $_SESSION['edt_evento'];
$data = $_REQUEST['data'];

$hora = $_REQUEST['hora'];
$hora_final = $_REQUEST['horaf'];	

$numeroMaximo = $_REQUEST['nNumMax'];
$numeroMinimo = $_REQUEST['nNumMin'];

$privacidade = $_REQUEST['nPrivacidade'];

$descricao = $_REQUEST['descricao'];

atualizar(array("data","n_min","n_max","id_relacao","privacidade","descricao"), array($data,$numeroMinimo,$numeroMaximo,$id_relacao,$privacidade,$descricao),"evento", "WHERE id_evento = '$id'");

header("Location: ../eventosCriados.php");

 ?>