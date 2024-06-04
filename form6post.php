<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = htmlspecialchars($_POST["nome"]);
        $produto = htmlspecialchars($_POST["produto"]);
        $aval = $_POST["aval"];
        $mensagem = htmlspecialchars($_POST["mensagem"]);

        echo "<h3>Nome do Usuário: </h3>$nome<br>";
        echo "<h3>Produto:</h3> $produto<br>";
        echo "<h3>Avaliação:</h3>$aval<br>";
        echo "<h3>Mensagem:</h3>$mensagem<br>";
    }
?>