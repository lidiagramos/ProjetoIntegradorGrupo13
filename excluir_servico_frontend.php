<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="lightsteelblue">
<form method="POST" action="excluir_servico_backend.php">
<p><br>
ID Serviço: <select size="1" name="idservico">
<?php
include "conexao.php";
$res=mysql_query("select * from servico");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
$descricao=$registro[1];
echo "<option value=\"$cod\">$descricao</option>\n";
}
?>
</select><br><br>
</p> <br>

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Excluir">
</form>
</center>