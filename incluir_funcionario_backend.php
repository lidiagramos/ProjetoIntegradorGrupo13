<?php

include "conexao.php";

error_reporting(0);

$matricula1=$_POST['matricula'];
$pessoa_idpessoa1=$_POST['pessoa_idpessoa'];
$funcao_idfuncao1=$_POST['funcao_idfuncao'];
$data_admissao1=$_POST['data_admissao'];
$data_demissao1=$_POST['data_demissao'];

$inserir = mysql_query("INSERT INTO funcionario 
                (matricula, pessoa_idpessoa, funcao_idfuncao, data_admissao	, data_demissao) 
		        VALUES('$matricula1','$pessoa_idpessoa1','$funcao_idfuncao1','$data_admissao1',
				'$data_demissao1')") or die (mysql_error());
mysql_close ($db);

include "consulta_funcionario.php";

?>