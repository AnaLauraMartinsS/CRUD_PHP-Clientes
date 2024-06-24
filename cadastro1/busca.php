<?php 
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Resultado da Busca</h3>
            </div>
            <div class="card-body">
                <?php
                $busca = $_GET['busca'];
                $result_nomes = "SELECT * FROM tabela_clientes WHERE nome LIKE '%$busca%' ";
                $resultado = mysqli_query($conexao, $result_nomes);
                if(mysqli_num_rows($resultado) > 0) {
                ?>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data de Aniversário</th>
                            <th>CPF</th>
                            <th>Já Comprou?</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($linha = mysqli_fetch_array($resultado)){
                            ?>
                            <tr>
                                <td><?php echo $linha['id_cliente']; ?></td>
                                <td><?php echo $linha['nome']; ?></td>
                                <td><?php echo $linha['calendario']; ?></td>
                                <td><?php echo $linha['cpf']; ?></td>
                                <td><?php echo $linha['compra'] ? 'Sim' : 'Não'; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $linha['id_cliente']; ?>" class="btn btn-dark btn-sm">Editar</a>
                                    <a href="delete.php?id=<?php echo $linha['id_cliente']; ?>" class="btn btn-dark btn-sm" onclick="return confirm('Tem certeza que deseja excluir este cliente?');">Excluir</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                } else {
                    echo "<p class='text-danger'>Nenhum cliente encontrado com o nome: $busca</p>";
                }
                ?>
                <a href="formulario.php" class="btn btn-dark">Voltar</a>
            </div>
        </div>
        <p>	Martins&reg;</p>
    </div>
</body>
</html>
