<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id='pesquisa' action = "form3get.php" method = "GET">
        <label for = "termo"> Termo da pesquisa: </label><br>
        <input type = "text" id = "termo" name = "termo" required placeholder = "Pesquisa">
        <button type = "submit" value = "Pesquisar"> Procurar </button> 
    </form>
    <div id = "resultado"></div>

    <script>
        $(document).ready(function(){
            $('#pesquisa').submit(function(event){
                event.preventDefault();

                var termo = $('#termo').val();
                

                $.ajax({
                    type: 'GET',
                    url: 'form3get.php',
                    data: {
                        termo: termo,

                    },
                    success: function(response){
                        $('#resultado').html(''+response);
                    },
                    error: function(xhr, status, error){
                        $('#resultado').html('Erro: ' + error);
                    }
                });
            });
        });
    </script>        
</body>
</html>

