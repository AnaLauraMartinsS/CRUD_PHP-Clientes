<?php
include_once "conexao.php";

if (isset($_GET['id'])) {
    $conexao = mysqli_connect($servidor, $dbuser, $dbsenha, $dbname);

    if (!$conexao) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
    mysqli_set_charset($conexao, "utf8");

    $id = mysqli_real_escape_string($conexao, $_GET['id']);

    $result_nomes = "SELECT * FROM tabela_clientes WHERE id_cliente = '$id' LIMIT 1";
    $resultado_nomes = mysqli_query($conexao, $result_nomes);

    if ($resultado_nomes && mysqli_num_rows($resultado_nomes) > 0) {
        while ($linha = mysqli_fetch_array($resultado_nomes)) {
            $id_cliente = $linha['id_cliente'];
            $nome = $linha['nome'];
            $calendario = $linha['calendario'];
            $cpf = $linha['cpf'];
            $compra = $linha['compra'];
        }
    } else {
        echo "Nenhum cliente encontrado com o ID especificado.";
        $nome = "";
        $calendario = "";
        $cpf = "";
        $compra = "";
    }

    mysqli_close($conexao);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Editar Cadastro</h3>
            </div>
                
            <div class="card-body">
                <form method="post" name="cliente" action="atualizar.php">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Insira seu nome aqui" name="nome" value="<?php echo isset($nome) ? $nome : ''; ?>">
                        <input type="hidden" class="form-control" id="id" name="id_cliente" value="<?php echo isset($id_cliente) ? $id_cliente : ''; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="calendario" class="form-label">Data de Aniversário:</label>
                        <input type="date" class="form-control w-25" id="calendario" name="calendario" value="<?php echo isset($calendario) ? $calendario : ''; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="cpf" class="form-label">Nº do CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF" value="<?php echo isset($cpf) ? $cpf : ''; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Já fez compra conosco anteriormente?</label>
                        <div>
                            <label for="sim" class="form-check-label">Sim</label>
                            <input type="radio" class="form-check-input" id="sim" name="compra" value="1" <?php echo (isset($compra) && $compra == 1) ? 'checked' : ''; ?>>
                            <label for="nao" class="form-check-label">Não</label>
                            <input type="radio" class="form-check-input" id="nao" name="compra" value="0" <?php echo (isset($compra) && $compra == 0) ? 'checked' : ''; ?>>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Salvar</button>
                </form>
            </div>
        </div>
        <p> Martins&reg; </p>
    </div>
</body>
</html>
