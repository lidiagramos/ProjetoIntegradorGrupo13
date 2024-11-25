<?php
error_reporting(0);
include "conexao.php";
$idpessoa1=$_POST['idpessoa'];
$nome1=$_POST['nome'];
$idade1=$_POST['idade'];
$telefone1=$_POST['telefone'];
				
$alterar = mysql_query("UPDATE pessoa 
                    SET nome = '$nome1',
					idade = '$idade1', 
					telefone = '$telefone1'
					WHERE idpessoa = '$idpessoa1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_pessoa.php";
?>