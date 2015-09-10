<?php
function fecharConexao($connect){
        $fecha = mysql_close($connect);
        if(!$fecha){
            echo "Impossivel fechar a conexão!";
            return false;
        }  else {
            return TRUE;
        }
} 
?>