<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Cadastre-se!</h3>
            </div>
                
            <div class="card-body">
                <form method="get" name="busca" action="busca.php">
                    <div class="mb-3">
                        <label class="form-label">Pesquisa por nome:</label>
                        <input type="text" class="form-control" id="busca_nome" placeholder="Insira a busca aqui" name="busca">
                    </div>
                    <button type="submit" class="btn btn-dark mb-4">OK</button>
                </form>
                
                <form method="post" name="cliente" action="dados_clientes.php">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Insira seu nome aqui" name="nome">
                    </div>

                    <div class="mb-3">
                        <label for="calendario" class="form-label">Data de Aniversário:</label>
                        <input type="date" class="form-control w-25" id="calendario" name="calendario">
                    </div>

                    <div class="mb-3">
                        <label for="cpf" class="form-label">Nº do CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Já fez compra conosco anteriormente?</label>
                        <div>
                            <label for="sim" class="form-check-label">Sim</label>
                            <input type="radio" class="form-check-input" id="sim" name="compra" value="1">
                            <label for="nao" class="form-check-label">Não</label>
                            <input type="radio" class="form-check-input" id="nao" name="compra" value="0">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </form>
            </div>
        </div>
        <p>	Martins&reg;</p>
    </div>
</body>
</html>
