<?php 
session_start();

include ("../_Funcoes/FuncaoInserir.php");
include ("../_Funcoes/FuncaoSelectInsert.php");

$id_fb = $_SESSION['FBID'];
$id_go = $_SESSION['id_google'];
$email = $_SESSION['email'];
$nome = $_SESSION['FULLNAME'];


//inserir(array("nome","id_usuario"), array($id,$nome),'usuario');

$consulta= select("usuario","", "WHERE id_usuario = $id_fb AND id_usuario_google = $id_go", null, null);

       if ($consulta == TRUE) {
         header("Location: ../eventosCriados.php");
       }else{

       	inserir(array("nome","id_usuario","id_usuario_google", "email"), array($nome,$id_fb,$id_go,$email),'usuario');

         header("Location: ../eventosCriados.php");
       }

 ?>