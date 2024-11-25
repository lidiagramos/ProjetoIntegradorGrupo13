<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="incluir_funcionario_backend.php">
<p><br>

Matrícula: <input type="number" name="matricula"><br><br>

Pessoa: <select size="1" name="pessoa_idpessoa">

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

Função: <select size="1" name="funcao_idfuncao">

<option></option>

<?php

    include "conexao.php";

    $res=mysql_query("SELECT * FROM funcao");

    while ($registro=mysql_fetch_row($res))
    {
        $cod=$registro[0];
        $nome_pessoa=$registro[1];

        echo "<option value=\"$cod\">$nome_pessoa</option>\n";
    }

?>

</select><br><br> 

Data de Admissão: <input type="datetime-local" name="data_admissao"><br><br>

Data de Demissão: <input type="datetime-local" name="data_demissao"><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Incluir">
</form>
</center>