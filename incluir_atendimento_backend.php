<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1","root","vertrigo");
mysql_select_db("sistema_petshop2024",$db);
$idatendimento1=$_POST['idatendimento'];
$pet_idpet1=$_POST['pet_idpet'];
$idcliente1 =$_POST['idcliente'];
$funcionario_veterinario1=$_POST['funcionario_veterinario'];
$funcionario_entrada1=$_POST['funcionario_entrada'];
$funcionario_saida1=$_POST['funcionario_saida'];
$data_hora_entrada1=$_POST['data_hora_entrada'];
$data_hora_saida1=$_POST['data_hora_saida'];
$descricao1=$_POST['descricao'];

$inserir = mysql_query("UPDATE atendimento 
                (idatendimento, pet_idpet, idcliente, funcionario_veterinario, funcionario_entrada, funcionario_saida,
                data_hora_entrada, data_hora_saida, descricao) 
		        VALUES('$idatendimento1','$pet_idpet1','$idcliente1','$funcionario_veterinario1','$funcionario_entrada1',
				'$funcionario_saida1','$data_hora_entrada1','$data_hora_saida1','$descricao1')") or die (mysql_error());
mysql_close ($db);
?>