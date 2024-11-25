<html>
<head>

<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Ocupação</title>
</head>
<body>
<?php
error_reporting(0);

$db = mysql_connect ("127.0.0.1", "root", "vertrigo");
mysql_select_db("sistema_petshop2024",$db);

$result = mysql_query("select * from pet", $db);
echo "<table border='2'>
<tr>
<td><h4>ID Pet</h4></td>
<td><h4>ID Cliente</h4></td>
<td><h4>ID Raça</h4></td>
<td><h4>ID Pet Tipo</h4></td>
<td><h4>Tipo</h4></td>
<td><h4>Idade</h4></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr>
	<td>".$row["idpet"]."</td>
	<td>".$row["cliente_idcliente"]."</td>
	<td>".$row["raca_idraca"]."</td>
	<td>".$row["pet_tipo_idpet_tipo"]."</td>
	<td>".$row["tipo"]."</td>
	<td>".$row["idade"]."</td>
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
</body>

</html>