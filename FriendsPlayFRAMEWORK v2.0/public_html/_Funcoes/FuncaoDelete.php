<?php
    include("../_conexaoBD/Conexao.php");
    include("../_conexaoBD/FecharConexao.php");
        
function deleta($tabela, $where=null){

    //Montar a sql

    $delete = "DELETE FROM {$tabela} {$where}";

    //conectou
    if($con = connect()){
        //Deletou
        if(mysql_query($delete,$con)){
            //fechar conexão
            FecharConexao($con);
            return true;
        }else{
            echo "Query invalida {$delete}";
            return false;
        }
    }else{
        return false;
    }
}

?>