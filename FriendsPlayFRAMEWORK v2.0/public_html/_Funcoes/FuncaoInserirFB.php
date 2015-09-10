<?php
    include("../_conexaoBD/Conexao.php");
    include("../_conexaoBD/FecharConexao.php");
        
    function inserir($coluna, $valor, $tabela){
        //Perguntar se os dado recebidos são arrays
        if((is_array($coluna)) and ( is_array($valor))){
            //Verificar o numero de elementos
            if(count($coluna) == count($valor)){
                //Montar sql
                $inserir = "INSERT INTO {$tabela}(".implode(', ',$coluna).")
                    VALUES('".implode('\', \'',$valor)."')";
            }  else {
                return false;
            }
        }  else {
            //
            //Montar sql
            $inserir = "INSERT INTO {$tabela} ({$coluna}) values ('{$valor}')";
        }
        //Conectou?
        if($conexao = connect()){
            //Inseriu?
            if(mysql_query($inserir, $conexao)){
                //Fechar conexao
                fecharConexao($conexao);
                return TRUE;
            }  else {
                echo "Query invalida!";
                return false;
            }
        }  else {
            return FALSE;
        }
    }

?>