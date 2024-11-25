<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="alterar_pet_raca_backend.php">
<p><br>

ID Pet Raça: <select size="1" name="idpet_raca">
<?php

include "conexao.php";

$res=mysql_query("select * from pet_raca");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

Descrição: <input type="text" name="descricao"><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Alterar">
</form>
</center>