<?php
include 'includes/conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data_limite = $_POST['data_limite'];
$status = $_POST['status'];

$sql = "UPDATE tarefas SET nome = '$nome', descricao = '$descricao', data_limite = '$data_limite', status = '$status' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['mensagem'] = "Tarefa atualizada com sucesso!";
    $_SESSION['tipo_mensagem'] = "success";
    header("Location: index.php");
} else {
    session_start();
    $_SESSION['mensagem'] = "Erro ao atualizar tarefa: " . $conn->error;
    $_SESSION['tipo_mensagem'] = "danger";
    header("Location: index.php");
}

$conn->close();
?>