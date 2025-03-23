<?php
include 'includes/conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM tarefas WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['mensagem'] = "Tarefa excluída com sucesso!";
    $_SESSION['tipo_mensagem'] = "success";
    header("Location: index.php");
} else {
    session_start();
    $_SESSION['mensagem'] = "Erro ao excluir tarefa: " . $conn->error;
    $_SESSION['tipo_mensagem'] = "danger";
    header("Location: index.php");
}

$conn->close();
?>