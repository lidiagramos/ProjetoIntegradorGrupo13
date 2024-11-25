<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="incluir_financeiro_backend.php">
<p><br>

ID Financeiro: <input type="number" name="idfinanceiro"><br><br>

ID Atendimento: <select size="1" name="idatendimento">
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

Compra e Venda: <select size="1" name="compra_venda">
<?php


$res=mysql_query("select * from compra_venda");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];

echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

Valor: <input type="text" name="valor"><br><br>

Data de Vencimento: <input type="datetime-local" name="data_vencimento"><br><br> 

Data de Pagamento: <input type="datetime-local" name="data_pagamento"><br><br> 

Status: <input type="text" name="status"><br><br> 

Financeiro Tipo: <input type="text" name="financeiro_tipo"><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Incluir">
</form>
</center>