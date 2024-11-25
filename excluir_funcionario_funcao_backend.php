<?php
error_reporting(0);
include "conexao.php";
$funcionario_matricula1=$_POST['funcionario_matricula'];

$inserir = mysql_query("DELETE FROM funcionario_funcao 
						WHERE funcionario_matricula ='$funcionario_matricula1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_funcionario_funcao.php";
?>
