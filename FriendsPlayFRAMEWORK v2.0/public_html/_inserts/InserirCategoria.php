<?php 

include ("../_Funcoes/FuncaoInserir.php");



$nome = $_REQUEST['nome'];
$num_max = $_REQUEST['n_maximo'];
$num_min = $_REQUEST['n_minimo'];

inserir(array("nome_categ_esportiva", "num_max_participantes_cat","num_min_participantes_cat"),
	array($nome,$num_max,$num_min), "Categoria_Esportiva");



 ?>