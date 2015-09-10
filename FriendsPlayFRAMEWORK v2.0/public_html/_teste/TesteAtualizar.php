<?php

include ("../_Funcoes/FuncaoAtualizar.php");

atualizar(array("link_usuario", "nome_usuario"), 
	array("wwww.google.com", "CasaGrande"), "Usuario", "where id_usuario = 24");



?>