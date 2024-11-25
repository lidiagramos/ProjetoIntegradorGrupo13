<?php
error_reporting(0);
include "conexao.php";
$idpet1=$_POST['idpet'];

$inserir = mysql_query("DELETE FROM pet 
						WHERE idpet ='$idpet1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_pet.php";
?>
