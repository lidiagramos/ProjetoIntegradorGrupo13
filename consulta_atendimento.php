<html>
<head>
	
<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Ocupação</title>
<body>
<?php
error_reporting(0);
$db = mysql_connect ("127.0.0.1", "root", "vertrigo");
mysql_select_db("sistema_petshop2024",$db);
$result = mysql_query("select * from atendimento", $db);
echo "<table border='2'>
<tr>
<td><h4>ID Atendimento</h4></td>
<td><h4>Id Pet</h4></td>
<td><h4>Id Cliente</h4></td>
<td><h4>Funcionário Veterinário</h4></td>
<td><h4>Funcionário Entrada</h4></td>
<td><h4>Funcionário Saída</h4></td>
<td><h4>Data e Hora Entrada</h4></td>
<td><h4>Data e Hora Saída</h4></td>
<td><h4>Descrição</h4></td>

</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr>
	<td>".$row["idatendimento"]."</td>
	<td>".$row["pet_idpet"]."</td>
	<td>".$row["idcliente"]."</td>
	<td>".$row["funcionario_veterinario"]."</td>
	<td>".$row["funcionario_entrada"]."</td>
	<td>".$row["funcionario_saida"]."</td>
	<td>".$row["data_hora_entrada"]."</td>
	<td>".$row["data_hora_saida"]."</td>
	<td>".$row["descricao"]."</td>
	</tr><br>";
	}
	echo "</table></center>";
	echo "<br />";mysql_free_result($result);
mysql_close ($db);
?>
<br><br>
<form><center>
<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
</form></center>
</center>
<!--Fim Consulta-->