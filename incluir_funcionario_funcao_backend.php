<?php

include "conexao.php";

error_reporting(0);

$funcionario_matricula=$_POST['funcionario_matricula'];
$funcao_idfuncao=$_POST['funcao_idfuncao'];

$inserir_funcionario_funcao = mysql_query("INSERT INTO funcionario_funcao 
                                (funcionario_matricula,funcao_idfuncao) 
                                VALUES('$funcionario_matricula','$funcao_idfuncao')") or die (mysql_error());


mysql_close ($db);

include "consulta_funcionario_funcao.php";

?>