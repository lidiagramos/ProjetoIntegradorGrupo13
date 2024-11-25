<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="incluir_atendimento_itens_backend.php">
<p><br>

ID Serviço: <select size="1" name="idservico">
<?php
include "conexao.php";

$res=mysql_query("select * from servico");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];

echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

ID Atendimento:<select size="1" name="idatendimento">
<?php

$res=mysql_query("select * from atendimento");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];

echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

Descrição: <input type="text" name="descricao"><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Incluir">
</form>
</center>