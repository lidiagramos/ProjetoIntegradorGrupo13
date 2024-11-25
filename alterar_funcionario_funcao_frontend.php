<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="alterar_funcionario_funcao_backend.php">
<p><br>

ID Matrícula: <select size="1" name="funcionario_matricula">
<?php

include "conexao.php";

$res=mysql_query("select * from funcionario");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

ID Função: <select size="1" name="funcao_idfuncao">
<?php

$res=mysql_query("select * from funcao");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Alterar">
</form>
</center>