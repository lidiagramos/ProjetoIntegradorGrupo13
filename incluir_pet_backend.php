<?php

include "conexao.php";

error_reporting(0);

$idpet1=$_POST['idpet'];
$cliente_idcliente1=$_POST['cliente_idcliente'];
$raca_idraca1 =$_POST['raca_idraca'];
$pet_tipo_idpet_tipo1=$_POST['pet_tipo_idpet_tipo'];
$tipo1=$_POST['tipo'];
$idade1=$_POST['idade'];

$inserir = mysql_query("INSERT INTO pet 
                (idpet, cliente_idcliente, raca_idraca, pet_tipo_idpet_tipo, tipo, idade) 
		        VALUES('$idpet1','$cliente_idcliente1','$raca_idraca1','$pet_tipo_idpet_tipo1','$tipo1',
				'$idade1')") or die (mysql_error());
mysql_close ($db);

include "consulta_pet.php";

?>