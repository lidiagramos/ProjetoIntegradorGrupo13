<?php
error_reporting(0);
include "conexao.php";
$idcompra_venda1=$_POST['idcompra_venda'];
$idfornecedor1=$_POST['idfornecedor'];
$cliente_idcliente1=$_POST['cliente_idcliente'];
$descricao1=$_POST['descricao'];
$valor1=$_POST['valor'];
$nro_nota1=$_POST['nro_nota'];
$tipo1=$_POST['tipo'];
				
$alterar = mysql_query("UPDATE compra_venda 
                    SET idfornecedor = '$idfornecedor1',
					cliente_idcliente = '$cliente_idcliente1', 
					descricao = '$descricao1',
					valor = '$valor1',
					nro_nota = '$nro_nota1',
					tipo = '$tipo1'
					WHERE idcompra_venda = '$idcompra_venda1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_compra_venda.php";
?>