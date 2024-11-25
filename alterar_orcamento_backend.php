<?php
error_reporting(0);
include "conexao.php";
$idorcamento1=$_POST['idorcamento'];
$idatendimento1=$_POST['idatendimento'];
$valor1=$_POST['valor'];
$data_validade1=$_POST['data_validade'];
				
$alterar = mysql_query("UPDATE orcamento 
                    SET idatendimento = '$idatendimento1',
					valor = '$valor1', 
					data_validade = '$data_validade1'
					WHERE idorcamento = '$idorcamento1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_orcamento.php";
?>