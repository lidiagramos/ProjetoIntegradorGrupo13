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
$result = mysql_query("select * from fornecedor", $db);
echo "<table border='2'>
<tr>
<td><h4>ID Fornecedor</h4></td>
<td><h4>ID Pessoa</h4></td>
<td><h4>Nome Fantasia</h4></td>
<td><h4>Razão Social</h4></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr>
	<td>".$row["idfornecedor"]."</td>
	<td>".$row["idpessoa"]."</td>
	<td>".$row["nomefantasia"]."</td>
	<td>".$row["razaosocial"]."</td>
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