<?php
error_reporting(0);
include "conexao.php";
$idpet_raca1=$_POST['idpet_raca'];
$descricao1=$_POST['descricao'];
				
$alterar = mysql_query("UPDATE pet_raca 
                    SET descricao = '$descricao1'
					WHERE idpet_raca = '$idpet_raca1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_pet_raca.php";
?>