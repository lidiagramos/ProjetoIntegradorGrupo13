<?php
error_reporting(0);
include "conexao.php";
$idorcamento1=$_POST['idorcamento'];

$inserir = mysql_query("DELETE FROM orcamento 
						WHERE idorcamento ='$idorcamento1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_orcamento.php";
?>
