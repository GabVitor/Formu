<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<form id = "quizatv" action = "form9post.php" method = "post">
		<label for = "quiz"> Qual o melhor JoJo? </label><br>
		<select id = "quiz" name = "quiz[0]" required>
            <option value =""> Selecione... </option>
            <option value = "jojo1"> Jonathan Joestar </option>
            <option value = "jojo2"> Joseph Joestar </option>
            <option value = "jojo3"> Jotaro Kujo </option>
            <option value = "jojo4"> Josuke Higashikata </option>
            <option value = "jojo5"> Giorno Giovanna </option>
            <option value = "jojo6"> Jolyne Cujoh </option>
            <option value = "jojo7"> Johnny Joestar </option>
            <option value = "jojo8"> Josuke Higashikata 8 </option>
            <option value = "jojo9"> Jodio Joestar</option>
        </select><br>
        <button type = "submit" value = "Enviar"> Enviar </button>
</form>
    <div id ="resultado"></div>

    <script>
        $(document).ready(function(){
            $('#quizatv').submit(function(event){
                event.preventDefault(); // Evita submissão padrão do formulário

                var quiz = $('#quiz').val();

                //
                $.ajax({
                    type: 'POST',
                    url: 'form9post.php',
                    data:{
                        quiz: quiz
                    },
                    success: function(response){
                        $('#resultado').html('Sua pontuação: ' + response);
                    },
                    erro: function(xhr, status, error){
                        $('#resultado').html('Erro: ' + error);
                    }
                });
            });
        });
    </script>
</body>
</html>