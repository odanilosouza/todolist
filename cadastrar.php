<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastrar Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/style.css">
    </head>
</head>
<body>
    <div class="container">
        <h1>Cadastrar Tarefa</h1>
        <form action="salvar.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="data_limite" class="form-label">Data Limite</label>
                <input type="date" name="data_limite" id="data_limite" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select">
                    <option value="Pendente">Pendente</option>
                    <option value="Execução">Execução</option>
                    <option value="Concluído">Concluído</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>