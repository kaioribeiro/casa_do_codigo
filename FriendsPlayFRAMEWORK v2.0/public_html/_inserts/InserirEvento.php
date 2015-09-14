<?php 
session_start();


include ("../_Funcoes/FuncaoInserir.php");
include ("../_Funcoes/FuncaoSelectInsert.php");
//Perfil
$nome = $_REQUEST['nome'];
$modalidade = $_REQUEST['modalidade'];

// //Logradouro
// $local = $_REQUEST['nLocal'];
// $numeroDoLocal = $_REQUEST['nNumeroDolocal'];
// $cidade = $_REQUEST['nCidade'];
// $estado = $_REQUEST['nEstado'];

//Caracteristicas e data
$data = $_REQUEST['data'];
$hora = $_REQUEST['hora'];
$hora_final = $_REQUEST['horaf'];	
$numeroMaximo = $_REQUEST['nNumMax'];
$numeroMinimo = $_REQUEST['nNumMin'];
$privacidade = $_REQUEST['privacidade'];

//Descrição
$descricao = $_REQUEST['descricao'];


//Retorna o evento caso ele exista 
 $verificar_nome_data = select("evento","*", "where nome = '$nome' and data = '$data'",null, null);

//Se o evento não existir
 if ($verificar_nome_data != true) {
	
 	$verificar_data = select("evento","nome, horario_inicial, horario_final", "where data = '$data'",null, null);

 	if ($verificar_data != null) {
		
		for ($i=0; $i < count($verificar_data); $i++) { 
		echo $verificar_data[$i]["nome"]."<br>";
		echo $verificar_data[$i]["horario_inicial"]."<br>";
		echo $verificar_data[$i]["horario_final"]."<br>";
		
		}
 		
 	} else {
		 inserir(array("nome", "data","horario_inicial","horario_final","n_min","n_max","privacidade",
		 "descricao","id_usuario","id_usuario_google","modalidade","id_relacao"),

		array($nome, $data, $hora, $hora_final, $numeroMinimo, $numeroMaximo, $privacidade, $descricao, $_SESSION['FBID'],$_SESSION['id_google'],$modalidade,$_SESSION['id_local'],),
	  	"evento");
 		 header("Location: ../eventosCriados.php");	
 		 }
	
	
 }else{
 	echo "Evento já existe!";
 }

//header("Location: ../eventosCriados.php"); 
 

 ?>