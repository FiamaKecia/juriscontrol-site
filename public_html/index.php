<?php
session_start();

// Protege a página: redireciona se não estiver logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Início - Sistema Jurídico</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Barra de navegação -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sistema Jurídico</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="usuarios/usuario_cadastrar.php">Cadastrar Usuário</a></li>
          <li class="nav-item"><a class="nav-link" href="usuarios/usuario_listar.php">Listar Usuários</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Relatórios</a></li>
        </ul>
        <span class="navbar-text me-3">Bem-vindo, <?php echo $_SESSION['nome']; ?></span>
        <a href="logout.php" class="btn btn-outline-light">Sair</a>
      </div>
    </div>
  </nav>

  <!-- Conteúdo principal -->
  <div class="container mt-5">
    <div class="text-center">
      <h2>Sistema de Controle Jurídico</h2>
      <p class="lead">Use o menu acima para navegar pelo sistema.</p>
    </div>
  </div>
</body>
</html>
