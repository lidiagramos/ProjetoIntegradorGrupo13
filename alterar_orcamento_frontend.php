<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="alterar_orcamento_backend.php">
<p><br>

ID Orçamento: <select size="1" name="idorcamento">
<?php

include "conexao.php";

$res=mysql_query("select * from orcamento");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

ID Atendimento: <select size="1" name="idatendimento">
<?php

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

<input type="submit" name="Submit" value="Alterar">
</form>
</center>
<!--Fim Incluir-->