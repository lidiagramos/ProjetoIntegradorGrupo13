<?php

include "conexao.php";

error_reporting(0);

$idpetraca1=$_POST['idpet_raca'];
$descricao1=$_POST['descricao'];

$inserir = mysql_query("INSERT INTO pet_raca 
                (idpet_raca, descricao) 
		        VALUES('$idpetraca1','$descricao1'
				)") or die (mysql_error());
mysql_close ($db);

include "consulta_pet_raca.php";

?>