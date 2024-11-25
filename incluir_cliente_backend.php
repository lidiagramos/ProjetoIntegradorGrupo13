<?php

include "conexao.php";

error_reporting(0);

$idcliente1 =$_POST['idcliente'];
$idpessoa1=$_POST['idpessoa'];
$cpf_cnpj1=$_POST['cpf_cnpj'];

$inserir = mysql_query("INSERT INTO cliente 
                (idcliente, idpessoa, cpf_cnpj) 
		        VALUES('$idcliente1','$idpessoa1','$cpf_cnpj1')") or die (mysql_error());
mysql_close ($db);

include "consulta_cliente.php";

?>