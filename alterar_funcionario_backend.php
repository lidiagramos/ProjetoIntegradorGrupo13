<?php
error_reporting(0);
include "conexao.php";
$matricula1=$_POST['matricula'];
$pessoa_idpessoa1=$_POST['pessoa_idpessoa'];
$funcao_idfuncao1=$_POST['funcao_idfuncao'];
$data_admissao1=$_POST['data_admissao'];
$data_demissao1=$_POST['data_demissao'];
				
$alterar = mysql_query("UPDATE funcionario 
                    SET pessoa_idpessoa = '$pessoa_idpessoa1',
					funcao_idfuncao = '$funcao_idfuncao1', 
					data_admissao = '$data_admissao1',
					data_demissao = '$data_demissao1'
					WHERE matricula = '$matricula1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_funcionario.php";
?>