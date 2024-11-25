<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root","vertrigo");
mysql_select_db("sistema_petshop2024",$db);
$idservico1=$_POST['idservico'];
$idatendimento1=$_POST['idatendimento'];
$descricao1=$_POST['descricao'];

$inserir = mysql_query("INSERT INTO atendimento_itens 
                (idservico, idatendimento, descricao) 
		        VALUES('$idservico1','$idatendimento1','$descricao1')") or die (mysql_error());
mysql_close ($db);
?>