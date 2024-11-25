<?php

include "conexao.php";

error_reporting(0);

$idfornecedor1=$_POST['idfornecedor'];
$idpessoa1=$_POST['idpessoa'];
$nomefantasia1 =$_POST['nomefantasia'];
$razaosocial1=$_POST['razaosocial'];

$inserir = mysql_query("INSERT INTO fornecedor 
                (idfornecedor, idpessoa, nomefantasia, razaosocial) 
		        VALUES('$idfornecedor1','$idpessoa1','$nomefantasia1','$razaosocial1')") or die (mysql_error());
mysql_close ($db);

include "consulta_fornecedor.php";

?>