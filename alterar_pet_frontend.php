<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="alterar_pet_backend.php">
<p><br>

ID Pet: <select size="1" name="idpet">

<option value=""></option>

<?php

    include "conexao.php";

    $res=mysql_query("SELECT * FROM pet;");

    while ($registro=mysql_fetch_row($res))
    {
        $cod=$registro[0];

        echo "<option value=\"$cod\">$cod</option>\n";
    }

?>

</select><br><br> 

Cliente: <select size="1" name="cliente_idcliente">

<option value=""></option>

<?php

    $res=mysql_query("SELECT * FROM cliente INNER JOIN pessoa ON cliente.idpessoa = pessoa.idpessoa;");

    while ($registro=mysql_fetch_row($res))
    {
        $cod=$registro[0];
        $nome_pessoa=$registro[4];

        echo "<option value=\"$cod\">$nome_pessoa</option>\n";
    }

?>

</select><br><br> 

Raça: <select size="1" name="raca_idraca">

<option></option>

<?php

    $res=mysql_query("SELECT * FROM pet_raca");

    while ($registro=mysql_fetch_row($res))
    {
        $cod=$registro[0];
        $nome_pessoa=$registro[1];

        echo "<option value=\"$cod\">$nome_pessoa</option>\n";
    }

?>

</select><br><br> 

Pet Tipo: <select size="1" name="pet_tipo_idpet_tipo">

<option></option>

<?php

    $res=mysql_query("SELECT * FROM pet_tipo");

    while ($registro=mysql_fetch_row($res))
    {
        $cod=$registro[0];
        $nome_pessoa=$registro[1];

        echo "<option value=\"$cod\">$nome_pessoa</option>\n";
    }

?>

</select><br><br> 

Tipo: <input type="text" name="tipo"><br><br> 

Idade: <input type="text" name="idade"><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Alterar">
</form>
</center>