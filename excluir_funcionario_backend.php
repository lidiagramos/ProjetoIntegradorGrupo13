<?php
error_reporting(0);
include "conexao.php";
$matricula1=$_POST['matricula'];

$inserir = mysql_query("DELETE FROM funcionario 
						WHERE matricula ='$matricula1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_funcionario.php";
?>
