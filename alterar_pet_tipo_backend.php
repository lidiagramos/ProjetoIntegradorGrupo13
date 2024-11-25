<?php
error_reporting(0);
include "conexao.php";
$idpet_tipo1=$_POST['idpet_tipo'];
$descricao1=$_POST['descricao'];
				
$alterar = mysql_query("UPDATE pet_tipo 
                    SET descricao = '$descricao1'
					WHERE idpet_tipo = '$idpet_tipo1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_pet_tipo.php";
?>