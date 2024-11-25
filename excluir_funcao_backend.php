<?php
error_reporting(0);
include "conexao.php";
$idfuncao1=$_POST['idfuncao'];

$inserir = mysql_query("DELETE FROM funcao 
						WHERE idfuncao ='$idfuncao1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_funcao.php";
?>
