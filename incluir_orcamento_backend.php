<?php

include "conexao.php";

error_reporting(0);

$idorcamento1=$_POST['idorcamento'];
$idatendimento1=$_POST['idatendimento'];
$valor1=$_POST['valor'];
$data_validade1=$_POST['data_validade'];

$inserir = mysql_query("INSERT INTO orcamento 
                (idorcamento,idatendimento,valor,data_validade) 
		        VALUES('$idorcamento1','$idatendimento1','$valor1',
				'$data_validade1')") or die (mysql_error());
mysql_close ($db);

include "consulta_orcamento.php";

?>