<?php
error_reporting(0);
include "conexao.php";
$idservico1=$_POST['idservico'];
$nome1=$_POST['nome'];
				
$alterar = mysql_query("UPDATE servico 
                    SET nome = '$nome1'
					WHERE idservico = '$idservico1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_servico.php";
?>