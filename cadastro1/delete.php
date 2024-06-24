<?php
    include_once"conexao.php";
?>

<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tabela_clientes WHERE id_cliente = '$id'";

    if(mysqli_query($conexao, $sql)) {
        header("Location: formulario.php");
    }else {
        echo 'Erro!';
    }
?>