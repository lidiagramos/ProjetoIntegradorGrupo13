<?php
error_reporting(0);
include "conexao.php";
$idatendimento1=$_POST['idatendimento'];

$inserir = mysql_query("DELETE FROM atendimento_itens 
						WHERE idatendimento ='$idatendimento1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_atendimento_itens.php";
?>
