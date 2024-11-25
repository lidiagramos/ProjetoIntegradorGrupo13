<link rel="stylesheet" type="text/css" href="formata_padrao.css" />

<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="incluir_funcionario_funcao_backend.php">
<p><br>

Matrícula: <select size="1" name="funcionario_matricula">

<option></option>

    <?php

        include "conexao.php";

        $res=mysql_query("SELECT * FROM funcionario INNER JOIN pessoa ON funcionario.pessoa_idpessoa = pessoa.idpessoa;");

        while ($registro=mysql_fetch_row($res))
        {
            $matricula=$registro[0];
            $nome_pessoa=$registro[6];

            echo "<option value=\"$matricula\">$nome_pessoa</option>\n";
        }

    ?>

</select><br><br> 

Função: <select size="1" name="funcao_idfuncao">

<option></option>

<?php

    $res=mysql_query("SELECT * FROM funcao");

    while ($registro=mysql_fetch_row($res))
    {
        $idfuncao=$registro[0];
        $nome_funcao=$registro[1];

        echo "<option value=\"$idfuncao\">$nome_funcao</option>\n";
    }

?>

</select><br><br> 

<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

<input type="submit" name="Submit" value="Incluir">
</form>
</center>