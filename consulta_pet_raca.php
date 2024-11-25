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

$result = mysql_query("select * from pet_raca", $db);
echo "<table border='2'>
<tr>
<td><h4>ID Raça</h4></td>
<td><h4>Descrição</h4></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr>
	<td>".$row["idpet_raca"]."</td>
	<td>".$row["descricao"]."</td>
	</tr><br>";
	}
	echo "</table>";
	mysql_free_result($result);
mysql_close ($db);
?>
<br><br>
<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
</center>
</body>
</html>