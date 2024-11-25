<?php

include "conexao.php";

error_reporting(0);

$idpettipo1=$_POST['idpet_tipo'];
$descricao1=$_POST['descricao'];

$inserir = mysql_query("INSERT INTO pet_tipo 
                (idpet_tipo, descricao) 
		        VALUES('$idpettipo1','$descricao1')") or die (mysql_error());
mysql_close ($db);

include "consulta_pet_tipo.php";

?>