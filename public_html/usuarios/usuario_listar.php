<?php
require_once("../inc/conexao.php");
require_once("../inc/funcoes.php");

// Consulta os usuários
$sql = "SELECT usuario_id, nome, login FROM seguranca_tbUsuarios ORDER BY nome ASC";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Listagem de Usuários</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">Usuários Cadastrados</h2>

    <a href="usuario_cadastrar.php" class="btn btn-success mb-3">Novo Usuário</a>

    <table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Login</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($usuario = $resultado->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $usuario['usuario_id']; ?></td>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['login']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>

<?php
$conexao->close();
?>
