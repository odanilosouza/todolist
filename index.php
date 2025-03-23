<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Lista de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Lista de Tarefas</h1>
        <?php
        session_start();
        if (isset($_SESSION['mensagem'])) {
            echo '<div class="alert alert-' . $_SESSION['tipo_mensagem'] . '">' . $_SESSION['mensagem'] . '</div>';
            unset($_SESSION['mensagem']);
            unset($_SESSION['tipo_mensagem']);
        }
        ?>
        <div class="mb-3">
            <a href="cadastrar.php" class="btn btn-primary">Adicionar Tarefa</a>
        </div>
        <div class="mb-3">
            <form method="get" class="form-inline">
                <label for="status" class="mr-2">Filtrar por Status:</label>
                <select name="status" id="status" class="form-control" onchange="this.form.submit()">
                    <option value="">Todos</option>
                    <option value="Pendente" <?php if (isset($_GET['status']) && $_GET['status'] == 'Pendente') echo 'selected'; ?>>Pendente</option>
                    <option value="Execução" <?php if (isset($_GET['status']) && $_GET['status'] == 'Execução') echo 'selected'; ?>>Execução</option>
                    <option value="Concluído" <?php if (isset($_GET['status']) && $_GET['status'] == 'Concluído') echo 'selected'; ?>>Concluído</option>
                </select>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Data Limite</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'includes/conexao.php';
                $status_filtro = isset($_GET['status']) ? $_GET['status'] : '';
                $sql = "SELECT * FROM tarefas";
                if (!empty($status_filtro)) {
                    $sql .= " WHERE status = '$status_filtro'";
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['descricao'] . "</td>";
                        echo "<td>" . $row['data_limite'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "<td>
                                <a href='editar.php?id=" . $row['id'] . "' class='btn btn-sm btn-warning'>Editar</a>
                                <a href='excluir.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger'>Excluir</a>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhuma tarefa encontrada.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>