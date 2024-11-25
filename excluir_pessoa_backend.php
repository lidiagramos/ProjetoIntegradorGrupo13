<?php
error_reporting(0);
include "conexao.php";
$idpessoa1=$_POST['idpessoa'];

$inserir = mysql_query("DELETE FROM pessoa
						WHERE idpessoa ='$idpessoa1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_pessoa.php";
?>
