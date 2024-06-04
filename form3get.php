<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $termo = htmlspecialchars($_GET["termo"]);

        echo "<h3>Pesquisa:</h3>";
        echo "<p>Você procurou por $termo</p>";
    }else{
        echo "<h3> Acesso Inválido</h3>";
    }
?>