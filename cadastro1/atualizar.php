<?php 
include_once "conexao.php";
?>

<?php
$id = $_POST['id_cliente'];
$nome = $_POST['nome'];
$calendario = $_POST['calendario'];
$cpf = $_POST['cpf'];
$compra = $_POST['compra'];

$sql = "UPDATE tabela_clientes SET nome='$nome', calendario='$calendario', cpf='$cpf', compra='$compra' WHERE id_cliente='$id'";

if (mysqli_query($conexao, $sql)) {

    header("Location: edit.php");
    exit();
} else {
    echo "Erro na conexão com o banco: " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
