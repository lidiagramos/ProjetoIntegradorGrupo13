<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="alterar_fornecedor_backend.php">
<p><br>

ID Fornecedor:<select size="1" name="idfornecedor">
<?php

include "conexao.php";

$res=mysql_query("select * from fornecedor");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

Pessoa:<select size="1" name="idpessoa">

<option>Nome</option>

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

Nome Fantasia: <input type="text" name="nomefantasia"><br><br> 

Razão Social: <input type="text" name="razaosocial"><br><br>

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Alterar">
</form>
</center>