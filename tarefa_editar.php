<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa :: Editar</title>
    <?php
    include "referencias.php";
    ?>
</head>

<body>

    <?php
        // 1° PASSO: Criar variáveis para armazenar os dados retornados pelo comando SELECT

        $id = $POST["txtId"]; // O ID informado na página de PESQUISAR
        $descricao = "";
        $data_de_entrega = "";
        $prioridade = "";
        $responsavel = "";
       
        // 2 PASSO: Construir o comando SQL - SELECT

        $sql = "SELECT * FROM tarefa HERE id = ?";

        // 3º PASSO: Preparar o comando SQL para ser preparado na conexão

        $comando = $conexao->prepare($sql);

        // 4º PASSO: Associar os valores dos parametros do comando SQL

        // 5º PAsso: executar o comando SQL

        $comando->bind_param("i",$id);
        
        // OBS:Como um comando SELECT traz um retorno de dados, precisamos guardar os resultados em uma variável
       
        $comando->execute();

        $resultado = $comando->get_result();
        if (resultado->num_rows <=0)
        {
            echo "<h1> Esta tarefa não foi cadastrada!</h1>";
        }

        else 
        {
            $registro - $resultado->fetch_assoc();

            $descricao = $registro ["descrição"];
            $data_entrega = $registro ["descrição"];
            $descricao = $registro ["descrição"];
            $prioridade= $registro ["descrição"];
            $descricao = $registro ["descrição"];
        }

    ?>

    <form method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Tarefa :: Editar</h2>
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" class="form-control" required="" placeholder="Id da tarefa" name="txtId">
                </div>

                <div class="form-group">
                    <label>Descrição</label>
                    <input type="text" class="form-control" required="" placeholder="Descricao da tarefa" name="txtDescricao">
                </div>

                <div class="form-group">
                    <label>Data</label>
                    <input type="date" class="form-control" required="" name="txtData">
                </div>

                <div class="form-group">
                    <label>Prioridade</label>
                    <select name="txtPrioridade" class="form-control">
                        <option value="Alta">Alta</option>
                        <option value="Média">Média</option>
                        <option value="Baixa">Baixa</option>
                    </select>
                </div>


                <div class="form-group">
                    <label>Responsável</label>
                    <input type="text" class="form-control" placeholder="Responsável pela tarefa" name="txtResponsavel">
                </div>


                <br>
                <div class="form-group">

                    <button type="submit" class="btn btn-primary" name="btEditar">
                        Editar
                    </button>

                    <button type="submit" class="btn btn-warning" name="btExcluir">
                        Excluir
                    </button>


                    <a href="index.php">
                        <button type="button" class="btn btn-danger" name="btVoltar">
                            Voltar
                        </button>
                    </a>

                </div>

            </div>
        </div>
    </div>
    </form>

</body>

</html>