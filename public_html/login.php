<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login - Sistema Jurídico</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script>
    function cadastrarLogin() {
      window.location.href = "usuarios/usuario_cadastrar.php";
      alert('Você será redirecionado à tela de cadastro...');
    }

    function validarLogin() {
      let vLogin = document.getElementById("login").value;
      let vSenha = document.getElementById("senha").value;

      if (vLogin.trim() === "") {
        alert("O campo login deve ser informado!");
      } else if (vSenha.trim() === "") {
        alert("O campo senha deve ser informado!");
      } else {
        $.ajax({
          url: "usuarios/login_validar.php",
          type: "POST",
          data: {
            login: vLogin,
            senha: vSenha
          },
          success: function(data) {
            let retorno = data.replace(/(<([^>]+)>)/ig, '');
            if (retorno == '0') {
              alert('Login inválido!');
            } else {
              alert('Login validado com sucesso!');
              window.location.href = "usuarios/usuario_listar.php";
            }
          }
        });
      }
    }
  </script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="card p-4 shadow-lg" style="width: 350px;">
    <h2 class="text-center mb-4">Credenciais de Acesso</h2>
    <form id="loginForm" onsubmit="return false;">
      <div class="mb-3">
        <label for="login" class="form-label">Login</label>
        <input type="text" class="form-control" id="login" placeholder="Digite seu login">
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
      </div>
      <button class="btn btn-primary w-100" onclick="validarLogin()">Entrar</button>
      <br><br>
      <button class="btn btn-secondary w-100" onclick="cadastrarLogin()">Cadastrar</button>
    </form>
  </div>
</body>
</html>
