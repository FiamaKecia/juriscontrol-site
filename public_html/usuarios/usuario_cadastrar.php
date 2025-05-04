<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Usuário</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script>
    function salvarUsuario() {
      let nome = document.getElementById("nome").value;
      let login = document.getElementById("login").value;
      let senha = document.getElementById("senha").value;

      if (nome.trim() === "" || login.trim() === "" || senha.trim() === "") {
        alert("Todos os campos são obrigatórios!");
        return;
      }

      $.ajax({
        url: "usuarios_salvar.php",
        type: "POST",
        data: {
          nome: nome,
          login: login,
          senha: senha
        },
        success: function (data) {
          alert(data);
          window.location.href = "usuario_listar.php";
        }
      });
    }
  </script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="card p-4 shadow-lg" style="width: 400px;">
    <h2 class="text-center mb-4">Cadastro de Usuário</h2>
    <form onsubmit="return false;">
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite o nome completo">
      </div>
      <div class="mb-3">
        <label class="form-label">Login</label>
        <input type="text" class="form-control" id="login" placeholder="Digite o login desejado">
      </div>
      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Digite a senha">
      </div>
      <button class="btn btn-primary w-100" onclick="salvarUsuario()">Salvar</button>
    </form>
  </div>
</body>
</html>
