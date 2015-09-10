<?php 

include ("../_Funcoes/FuncaoInserir.php");
include ("../_Funcoes/FuncaoSelectInsert.php");
 //Logradouro
 $nome = $_REQUEST['nomeLocal'];
 $local = $_REQUEST['nLocal'];
 $numeroDoLocal = $_REQUEST['nNumeroDolocal'];
 $cidade = $_REQUEST['nCidade'];
 $estado = $_REQUEST['nEstado'];


$consulta = select("local_evento","*","where nome = '$nome' and local = '$local' and numero = '$numeroDoLocal'
	and cidade = '$cidade' and estado = '$estado'",null,null);
	if ($consulta != true) {
		inserir(array("nome","local","numero","cidade","estado"), array($nome,$local,$numeroDoLocal,$cidade,$estado),
		'local_evento');
	} else {
		echo "entrou no else";
	}
	



 ?>