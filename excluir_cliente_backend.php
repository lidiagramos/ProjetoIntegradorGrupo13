<?php

error_reporting(0);

include "conexao.php";

$idcliente1=$_POST['idcliente'];

$deletar = mysql_query("DELETE FROM cliente 
						WHERE idcliente ='$idcliente1'") 
						or die (mysql_error());

mysql_close ($db);

include "consulta_cliente.php";

?>