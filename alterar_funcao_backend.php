<?php
error_reporting(0);
include "conexao.php";
$idfuncao1=$_POST['idfuncao'];
$descricao1=$_POST['descricao'];
				
$alterar = mysql_query("UPDATE funcao 
                    SET descricao = '$descricao1'
					WHERE idfuncao = '$idfuncao1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_funcao.php";
?>