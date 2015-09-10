<?php 

include ("../_Funcoes/FuncaoInserir.php");

$id = $_SESSION['FBID'];
$nome = $_SESSION['FULLNAME'];

inserir(array("nome","id_usuario"), array($id,$nome),'usuario');

 ?>