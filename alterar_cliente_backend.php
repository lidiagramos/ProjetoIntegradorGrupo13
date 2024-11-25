<?php
error_reporting(0);
include "conexao.php";
$idcliente1=$_POST['idcliente'];
$idpessoa1=$_POST['idpessoa'];
$cpf_cnpj1=$_POST['cpf_cnpj'];
				
$alterar = mysql_query("UPDATE cliente 
                    SET idpessoa = '$idpessoa1',
					cpf_cnpj = '$cpf_cnpj1'
					WHERE idcliente = '$idcliente1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_cliente.php";
?>