<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="incluir_cliente_backend.php">
<p><br>

ID Cliente: <input type="number" name="idcliente"><br><br>

Pessoa: <select size="1" name="idpessoa">

<option></option>

<?php

    include "conexao.php";

    $res=mysql_query("SELECT * FROM pessoa");

    while ($registro=mysql_fetch_row($res))
    {
        $cod=$registro[0];
        $nome_pessoa=$registro[1];

        echo "<option value=\"$cod\">$nome_pessoa</option>\n";
    }

?>

</select><br><br>

CPF ou CNPJ: <input type="text" name="cpf_cnpj"><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Incluir">
</form>
</center>