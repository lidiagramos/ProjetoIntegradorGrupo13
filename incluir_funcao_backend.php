<?php

include "conexao.php";

error_reporting(0);

$idfuncao1=$_POST['idfuncao'];
$descricao1=$_POST['descricao'];

$inserir = mysql_query("INSERT INTO funcao 
                (idfuncao, descricao) 
		        VALUES('$idfuncao1','$descricao1')") or die (mysql_error());
mysql_close ($db);

include "consulta_funcao.php";

?>