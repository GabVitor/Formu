<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
</head>
<body>
<form id = "aval_produto" action = "form6post.php" method = "post">
		<label for = "nome"> Nome: </label><br>
		<input type = "text" id = "nome" name = "nome" required minlength = "3" maxlength = "50" placeholder = "Digite seu nome"><br>
		
		<label for = "produto"> Produto: </label><br>
		<input type = "text" id = "produto" name = "produto" required placeholder = "Digite o produto"><br>
		
		<label for = "aval"> Avaliação: </label><br>
		<select id = "aval" name = "aval" required><br>
            <option value = ""> Selecione... </option>
            <option value = "⭐"> 1 Estrela </option>
            <option value = "⭐⭐"> 2 Estrela </option>
            <option value = "⭐⭐⭐"> 3 Estrela </option>
            <option value = "⭐⭐⭐⭐"> 4 Estrela </option>
            <option value = "⭐⭐⭐⭐⭐"> 5 Estrela </option>
        </select><br>
        <label for = "mensagem"> Mensagem: </label><br>
        <input type = "text" id = "mensagem" name = "mensagem" required placeholder = "Digite a Mensagem"><br>

		<button type = "submit" value = "Enviar"> Enviar </button> 
</form>
<div id = "resultado"></div>

<script>
    $(document).ready(function(){
        $("#aval_produto").submit(function(event){
            event.preventDefault();

            var nome = $("#nome").val();
            var produto = $("#produto").val();
            var aval = $("#aval").val();
            var mensagem = $("#mensagem").val();

            $.ajax({
                type: "POST",
                url: "form6post.php",
                data:{
                    nome: nome,
                    produto: produto,
                    aval: aval,
                    mensagem: mensagem
                },
                    success: function(response){
                        $("#resultado").html(""+ response);
                    },
                    error: function(xhr, status, error){
                        $("#resultado").html("Erro"+ error);
                    }
            });
        });
    });
</script>   

</body>
</html>