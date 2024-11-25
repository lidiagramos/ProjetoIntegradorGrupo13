<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="alterar_pessoa_backend.php">
<p><br>

ID Pessoa:<select size="1" name="idpessoa">
<?php

include "conexao.php";

$res=mysql_query("select * from pessoa");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

Nome: <input type="text" name="nome"><br><br> 
Idade: <input type="text" name="idade"><br><br> 
Telefone: <input type="text" name="telefone"><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Alterar">
</form>
</center>