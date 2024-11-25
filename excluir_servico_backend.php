<?php
error_reporting(0);
include "conexao.php";
$idservico1=$_POST['idservico'];

$inserir = mysql_query("DELETE FROM servico
						WHERE idservico ='$idservico1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_servico.php";
?>
