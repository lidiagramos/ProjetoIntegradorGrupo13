<?php

include "conexao.php";

error_reporting(0);

$idpessoa1=$_POST['idpessoa'];
$nome1=$_POST['nome'];
$idade1 =$_POST['idade'];
$telefone1=$_POST['telefone'];

$inserir = mysql_query("INSERT INTO pessoa 
                (idpessoa, nome, idade, telefone) 
		        VALUES('$idpessoa1','$nome1','$idade1','$telefone1')") or die (mysql_error());
mysql_close ($db);

include "consulta_pessoa.php";

?>