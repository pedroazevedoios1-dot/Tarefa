<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // inclue as referencias para o BD e o css
    include "referencias.php";

    //capturar do FRONT quem é o ID a ser removido
    $id = $_POST["txtId"];
     
    // construir a estrutura do comendo DELETE
    $sql = "DELETE FROM Tarefa WHERE id = ?";

    //Criar o objeto comando associado a conexão de dados
    $comando = $conexao->prepare($sql);

    // Associar cada parametro do comando SQL com as variáveis
    $comando->bind_param("i", $id);

    // Executar comando
    if ($comando->execute())
    {
        echo "<h1>Tarefa Removida!</h1>";
    }
    else 
    {
        echo "<h1>TNão foi possivel remover a tatrefa!</h1>";
    }

    ?>

</body>
</html>