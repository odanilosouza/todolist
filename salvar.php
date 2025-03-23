<?php
include 'includes/conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data_limite = $_POST['data_limite'];
$status = $_POST['status'];

$sql = "INSERT INTO tarefas (nome, descricao, data_limite, status) VALUES ('$nome', '$descricao', '$data_limite', '$status')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['mensagem'] = "Tarefa cadastrada com sucesso!";
    $_SESSION['tipo_mensagem'] = "success";
    header("Location: index.php");
} else {
    session_start();
    $_SESSION['mensagem'] = "Erro ao cadastrar tarefa: " . $conn->error;
    $_SESSION['tipo_mensagem'] = "danger";
    header("Location: index.php");
}

$conn->close();
?>