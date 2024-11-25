<?php

include "conexao.php";

error_reporting(0);

$idservico1=$_POST['idservico'];
$nome1=$_POST['nome'];

$inserir = mysql_query("INSERT INTO servico 
                (idservico, nome) 
		        VALUES('$idservico1','$nome1')") or die (mysql_error());
mysql_close ($db);

include "consulta_servico.php";

?>