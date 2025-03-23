<?php
include 'includes/conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tarefas WHERE id = $id";
$result = $conn->query($sql);
$tarefa = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Editar Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Editar Tarefa</h1>
        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $tarefa['nome']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control"><?php echo $tarefa['descricao']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="data_limite" class="form-label">Data Limite</label>
                <input type="date" name="data_limite" id="data_limite" class="form-control" value="<?php echo $tarefa['data_limite']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select">
                    <option value="Pendente" <?php if ($tarefa['status'] == 'Pendente') echo 'selected'; ?>>Pendente</option>
                    <option value="Execução" <?php if ($tarefa['status'] == 'Execução') echo 'selected'; ?>>Execução</option>
                    <option value="Concluído" <?php if ($tarefa['status'] == 'Concluído') echo 'selected'; ?>>Concluído</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>