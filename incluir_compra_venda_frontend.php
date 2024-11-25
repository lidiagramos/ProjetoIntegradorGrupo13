<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="incluir_compra_venda_backend.php">
<p><br>

ID Compra e Venda: <input type="number" name="idcompra_venda"><br><br>

Fornecedor: <select size="1" name="idfornecedor">

<option></option>

<?php

    include "conexao.php";

    $res=mysql_query("SELECT * FROM fornecedor");

    while ($registro=mysql_fetch_row($res))
    {
        $cod=$registro[0];
        $nome_pessoa=$registro[3];

        echo "<option value=\"$cod\">$nome_pessoa</option>\n";
    }

?>

</select><br><br>

Cliente: <select size="1" name="cliente_idcliente">

<option value="">Nome:</option>

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

Descrição: <input type="text" name="descricao"><br><br>

Valor: <input type="text" name="valor"><br><br> 

Número da Nota: <input type="text" name="nro_nota"><br><br> 

Tipo: <input type="number" name="tipo"><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Incluir">
</form>
</center>