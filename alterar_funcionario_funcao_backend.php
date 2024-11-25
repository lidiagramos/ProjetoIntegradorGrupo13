<?php
error_reporting(0);
include "conexao.php";
$funcionario_matricula1=$_POST['funcionario_matricula'];
$funcao_idfuncao1=$_POST['funcao_idfuncao'];
				
$alterar = mysql_query("UPDATE funcionario_funcao 
                    SET funcao_idfuncao = '$funcao_idfuncao1'
					WHERE funcionario_matricula = '$funcionario_matricula1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_funcionario_funcao.php";
?>