<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="lightsteelblue">
<form method="POST" action="excluir_cliente_backend.php">
<p><br>
ID Cliente: <select size="1" name="idcliente">

<option value=""></option>

<?php

    include "conexao.php";

    $res=mysql_query("SELECT * FROM cliente");

    while ($registro=mysql_fetch_row($res))
    {
        $cod=$registro[0];
        $cpf_cnpj=$registro[2];

        echo "<option value=\"$cod\">$cpf_cnpj</option>\n";
    }

?>
</select><br><br>
</p> <br>

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Excluir">
</form>
</center>