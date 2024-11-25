<?php

include "conexao.php";

error_reporting(0);

$idfinanceiro1=$_POST['idfinanceiro'];
$idatendimento1=$_POST['idatendimento'];
$compra_venda1=$_POST['compra_venda'];
$valor1=$_POST['valor'];
$data_vencimento1=$_POST['data_vencimento'];
$data_pagamento1=$_POST['data_pagamento'];
$status1=$_POST['status'];
$financeiro_tipo1=$_POST['financeiro_tipo'];

$inserir = mysql_query("INSERT INTO financeiro 
                (idfinanceiro, idatendimento, compra_venda, valor, data_vencimento, data_pagamento,
                status, financeiro_tipo) 
		        VALUES('$idfinanceiro1','$idatendimento1','$compra_venda1','$valor1','$data_vencimento1',
				'$data_pagamento1','$status1','$financeiro_tipo1')") or die (mysql_error());
mysql_close ($db);

include "consulta_financeiro.php";

?>