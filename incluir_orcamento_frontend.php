<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="incluir_orcamento_backend.php">
<p><br>

ID Orçamento: <input type="number" name="idorcamento"><br><br> 

ID Atendimento:<select size="1" name="idatendimento">
<?php
include "conexao.php";

$res=mysql_query("select * from atendimento");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];

echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>
Valor: <input type="text" name="valor"><br><br> 
Data de Validade: <input type="datetime-local" name="data_validade"><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Incluir">
</form>
</center>