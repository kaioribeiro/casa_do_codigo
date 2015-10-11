<!DOCTYPE html>
<?php 

include ("../_Funcoes/FuncaoInserir.php");
include ("../_Funcoes/FuncaoSelectInsert.php");
 //Logradouro
 $nome = $_REQUEST['nome'];
 $logradouro = $_REQUEST['logradouro'];
 $numeroDoLocal = $_REQUEST['num'];
 $cidade = $_REQUEST['cidade'];
 $estado = $_REQUEST['estado'];


$consulta = select("local_evento","*","where nome = '$nome' and numero = '$numeroDoLocal'
	and cidade = '$cidade' and estado = '$estado'",null,null);
	if ($consulta != true) {
		inserir(array("nome","numero","cidade","estado","local"), array($nome,$numeroDoLocal,$cidade,$estado,$logradouro),
		'local_evento');
                
                
	} else {
            
		echo "entrou no else";
	}

 ?>