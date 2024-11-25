<?php
error_reporting(0);
include "conexao.php";
$idfinanceiro1=$_POST['idfinanceiro'];
$idatendimento1=$_POST['idatendimento'];
$compra_venda1=$_POST['compra_venda'];
$valor1=$_POST['valor'];
$data_vencimento1=$_POST['data_vencimento'];
$data_pagamento1=$_POST['data_pagamento'];
$status1=$_POST['status'];
$financeiro_tipo1=$_POST['financeiro_tipo'];
				
$alterar = mysql_query("UPDATE financeiro 
                    SET idatendimento = '$idatendimento1',
					compra_venda = '$compra_venda1', 
					valor = '$valor1',
					data_vencimento = '$data_vencimento1',
					data_pagamento = '$data_pagamento1',
					status = '$status1',
					financeiro_tipo = '$financeiro_tipo1'
					WHERE idfinanceiro = '$idfinanceiro1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_financeiro.php";
?>