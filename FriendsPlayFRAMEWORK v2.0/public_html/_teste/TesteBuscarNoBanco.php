<?php

include ("../_Funcoes/FuncaoSelect.php");

$consulta = select("Evento");
if ($consulta == TRUE) {
	
	for ($i=0; $i <count($consulta) ; $i++) { 
		echo $consulta[$i]["nome_evento"]."<br>";
		echo $consulta[$i]["data_evento"]."<br>";
		echo $consulta[$i]['local_evento']."<br>";
		echo $consulta[$i]['horario_evento']."<br>";
		echo $consulta[$i]['contador_participantes_evento']."<br>";
		echo $consulta[$i]['privacidade_evento']."<br>";
	}
}else{
            echo	"Nenhum dado foi retornado";
}

?>