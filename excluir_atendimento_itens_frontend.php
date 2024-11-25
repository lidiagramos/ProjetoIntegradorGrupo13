<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="lightsteelblue">
<form method="POST" action="excluir_atendimento_itens_backend.php">
<p><br>
ID do Atendimento Itens: <select size="1" name="idatendimento">
<?php
include "conexao.php";
$res=mysql_query("select * from atendimento_itens");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[1];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>
</p> <br>

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Excluir">
</form>
</center>