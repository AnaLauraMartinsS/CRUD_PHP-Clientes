<?php 
 include_once "conexao.php";
?>
<?php
    $nome = $_POST['nome'];
    $calendario = $_POST['calendario'];
    $cpf = $_POST['cpf'];
    $compra = $_POST['compra'];

    $sql = "INSERT INTO tabela_clientes (nome, calendario, cpf, compra) VALUES ('$nome', '$calendario', '$cpf', '$compra')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: formulario.php");
    } else {
        echo "Erro na conexão com o banco: " . $sql . "<br>" . mysqli_error($conexao);
    }
    
    mysqli_close($conexao);
?>
