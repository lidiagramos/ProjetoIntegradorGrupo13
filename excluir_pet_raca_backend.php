<?php
error_reporting(0);
include "conexao.php";
$idpet_raca1=$_POST['idpet_raca'];

$inserir = mysql_query("DELETE FROM pet_raca 
						WHERE idpet_raca ='$idpet_raca1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_pet_raca.php";
?>
