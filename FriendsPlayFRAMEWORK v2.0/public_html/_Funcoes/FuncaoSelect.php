<?php 
    include("_conexaoBD/Conexao.php");
    include("_conexaoBD/FecharConexao.php");


    function select($tabela, $coluna, $where, $ordem, $limite){
    	//SQL da consulta
    	$sql = "SELECT {$coluna} FROM {$tabela} {$where} {$ordem} {$limite}";
 
    	//Conectou? 

    	if($conexao = connect()){

    		//conseguiu consultar
    		if($query = mysql_query($sql, $conexao)){

    			//encountrou alguma coisa?
    			if(mysql_num_rows($query)>0 ){  

    				$resultados_totais = array();

    				while($resultado = mysql_fetch_assoc($query)){
    					$resultados_totais[] = $resultado;
    				}
    				//fechar conexão 
    				FecharConexao($conexao);

    				return $resultados_totais;
    			}
    		}else{
    			return false;
    		}
    	}else{
    		return false; 
    	}


    }

 ?>

