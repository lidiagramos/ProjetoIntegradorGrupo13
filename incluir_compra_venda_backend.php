<?php

include "conexao.php";

error_reporting(0);

$idcompra_venda1=$_POST['idcompra_venda'];
$idfornecedor1=$_POST['idfornecedor'];
$cliente_idcliente1=$_POST['cliente_idcliente'];
$descricao1=$_POST['descricao'];
$valor1=$_POST['valor'];
$nro_nota1=$_POST['nro_nota'];
$tipo1=$_POST['tipo'];

$inserir = mysql_query("INSERT INTO compra_venda 
                (idcompra_venda, idfornecedor, cliente_idcliente, descricao, valor, nro_nota, tipo) 
		        VALUES('$idcompra_venda1','$idfornecedor1','$cliente_idcliente1','$descricao1',
				'$valor1','$nro_nota1','$tipo1')") or die (mysql_error());
mysql_close ($db);

include "consulta_compra_venda.php";

?>