<?php
error_reporting(0);
include "conexao.php";
$idatendimento1=$_POST['idatendimento'];
$pet_idpet1=$_POST['pet_idpet'];
$idcliente1=$_POST['idcliente'];
$funcionario_veterinario1=$_POST['funcionario_veterinario'];
$funcionario_entrada1=$_POST['funcionario_entrada'];
$funcionario_saida1=$_POST['funcionario_saida'];
$data_hora_entrada1=$_POST['data_hora_entrada'];
$data_hora_saida1=$_POST['data_hora_saida'];
$descricao1=$_POST['descricao'];
				
$alterar = mysql_query("UPDATE atendimento 
                    SET idatendimento = '$idatendimento1',
					pet_idpet = '$pet_idpet1',
					idcliente = '$idcliente1',
					funcionario_veterinario = '$funcionario_veterinario1', 
					funcionario_entrada = '$funcionario_entrada1',
					funcionario_saida = '$funcionario_saida1',
					data_hora_entrada = '$data_hora_entrada1',
					data_hora_saida = '$data_hora_saida1',
					descricao = '$descricao1'
					WHERE idatendimento = '$idatendimento1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_atendimento.php";
?>