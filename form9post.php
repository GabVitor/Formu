<?php
$i = 0;
$respostaUsuario = $_POST["quiz"];
$resposta = array('0' => "jojo8");

    foreach($respostaUsuario as $chave => $valor){
        if($resposta[$chave] == $valor){
            $i++;
            echo "<h3> Sua pontuação: $i</h3><br>";
        }else{
            echo "<h3> Errou :( </h3><br>";
        }
    }
    
?>