<?php
error_reporting(0);
include "conexao.php";
$idservico1=$_POST['idservico'];
$idatendimento1=$_POST['idatendimento'];
$descricao1=$_POST['descricao'];
				
$alterar = mysql_query("UPDATE atendimento_itens 
                    SET idservico = '$idservico1',
					descricao = '$descricao1'
					WHERE idatendimento = '$idatendimento1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_atendimento_itens.php";
?>