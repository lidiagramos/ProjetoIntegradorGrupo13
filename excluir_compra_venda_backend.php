<?php
error_reporting(0);
include "conexao.php";
$idcompra_venda1=$_POST['idcompra_venda'];

$inserir = mysql_query("DELETE FROM compra_venda 
						WHERE idcompra_venda ='$idcompra_venda1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_compra_venda.php";
?>
