
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa :: Editar</title>
    <?php include "referencias.php"; ?>
</head>

<body>

<?php

$id = $_POST["txtId"] ?? "";
$descricao = "";
$data_de_entrega = "";
$prioridade = "";
$responsavel = "";

if (!empty($id)) {
    $sql = "SELECT * FROM tarefa WHERE id = ?";

    $comando = $conexao->prepare($sql);
    $comando->bind_param("i", $id);
    $comando->execute();
    $resultado = $comando->get_result();

    if ($resultado->num_rows <= 0) {
        echo "<h1>Esta tarefa não foi cadastrada!</h1>";
    } else {
        $registro = $resultado->fetch_assoc();

        $descricao = $registro["descricao"];
        $data_de_entrega = $registro["data_de_entrega"];
        $prioridade = $registro["prioridade"];
        $responsavel = $registro["responsavel"];
    }
}
?>

<form method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Tarefa :: Editar</h2>
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" class="form-control" required placeholder="Id da tarefa" name="txtId" value="<?php echo $id; ?>">
                </div>

                <div class="form-group">
                    <label>Descrição</label>
                    <input type="text" class="form-control" required placeholder="Descrição da tarefa" name="txtDescricao" value="<?php echo $descricao; ?>">
                </div>

                <div class="form-group">
                    <label>Data</label>
                    <input type="date" class="form-control" required name="txtData" value="<?php echo $data_de_entrega; ?>">
                </div>

                <div class="form-group">
                    <label>Prioridade</label>
                    <select name="txtPrioridade" class="form-control">
                        <option value="Alta" <?php if ($prioridade == "Alta") echo "selected"; ?>>Alta</option>
                        <option value="Média" <?php if ($prioridade == "Média") echo "selected"; ?>>Média</option>
                        <option value="Baixa" <?php if ($prioridade == "Baixa") echo "selected"; ?>>Baixa</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Responsável</label>
                    <input type="text" class="form-control" placeholder="Responsável pela tarefa" name="txtResponsavel" value="<?php echo $responsavel; ?>">
                </div>

                <br>
                <div class="form-group">
                    <button formaction="tarefa_atualizar.php" type="submit" class="btn btn-primary" name="btEditar">Editar</button>
                    <button formaction="tartefa_excluir.php" type="submit" class="btn btn-warning" name="btExcluir">Excluir</button>
                    <a href="index.php"><button type="button" class="btn btn-danger">Voltar</button></a>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>
