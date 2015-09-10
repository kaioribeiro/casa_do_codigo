<?php
    include("../_conexaoBD/Conexao.php");
    include("../_conexaoBD/FecharConexao.php");
    
    function atualizar($coluna, $valor, $tabela, $where){

        //Perguntar se os dado recebidos são arrays
        if((is_array($coluna)) and ( is_array($valor))){
            //Verificar o numero de elementos
            if(count($coluna) == count($valor)){

                $valor_coluna = null;
                
                //Colocar array em uma strig 
                for ($i=0; $i < count($coluna); $i++) { 
                    $valor_coluna .= "{$coluna[$i]} = '{$valor[$i]}',";
                }
                //Retirando a virgula da ultima posição
                $valor_coluna = substr($valor_coluna,0,-1);

                //Montar sql
                $atualizar = "UPDATE {$tabela} set {$valor_coluna} {$where}";

            }  else {
                return false;
            }
        }  else {
            //
            //Montar sql
            $atualizar = "UPDATE {$tabela} set {$coluna} = '{$valor}' {$where}";
        }
        //Conectou?
        if($conexao = connect()){
            //Inseriu?
            if(mysql_query($atualizar, $conexao)){
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