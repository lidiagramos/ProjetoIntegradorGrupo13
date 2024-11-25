<?php
error_reporting(0);
include "conexao.php";
$idfornecedor1=$_POST['idfornecedor'];
$idpessoa1=$_POST['idpessoa'];
$nomefantasia1=$_POST['nomefantasia'];
$razaosocial1=$_POST['razaosocial'];
				
$alterar = mysql_query("UPDATE fornecedor 
                    SET idpessoa = '$idpessoa1',
					nomefantasia = '$nomefantasia1', 
					razaosocial = '$razaosocial1'
					WHERE idfornecedor = '$idfornecedor1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_fornecedor.php";
?>