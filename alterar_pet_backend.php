<?php
error_reporting(0);
include "conexao.php";
$idpet1=$_POST['idpet'];
$cliente_idcliente1=$_POST['cliente_idcliente'];
$raca_idraca1=$_POST['raca_idraca'];
$pet_tipo_idpet_tipo1=$_POST['pet_tipo_idpet_tipo'];
$tipo1=$_POST['tipo'];
$idade1=$_POST['idade'];
				
$alterar = mysql_query("UPDATE pet 
                    SET cliente_idcliente = '$cliente_idcliente1',
					raca_idraca = '$raca_idraca1', 
					pet_tipo_idpet_tipo = '$pet_tipo_idpet_tipo1',
					tipo = '$tipo1',
					idade = '$idade1'
					WHERE idpet = '$idpet1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_pet.php";
?>