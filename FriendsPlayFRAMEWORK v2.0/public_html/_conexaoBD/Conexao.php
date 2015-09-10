<?php

function connect($banco="friendsPlay", $usuario="root", $senha="", $localhost="localhost"){
    //Tentar estabelecer a conexão
    $connect = mysql_connect($localhost, $usuario, $senha);
    //Conseguiu conectar?
    if(!$connect){
        die(trigger_error("Não foi possivel estabelecer conexão!"));
        return false;
    }  else {
        //Tentar selecionar o Banco de Dados
        $bd= mysql_select_db($banco, $connect);
        //Conseguiu selecionar o banco
        if(!$bd){
            die(trigger_error("Não foi possivel selecionar o Banco de dados!"));
            return false;
        }  else {
            return $connect;
        }
    }
}
?>
