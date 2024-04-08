<!DOCTYPE html>
<html lang="pt-br" data-bs-theme='dark'>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../public/assets/css/style-login.css" >
  <!-- Custom CSS -->
  <style>
    
  </style>
</head>
<body>

<div class="container">
  <div class="login-container align-items-center">
    <p class="h2" align-itens>Login</p>
    <!--<img class="align-items-center" src="../public/assets/img/logo.png" alt="Logo da Empresa">-->
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Seu email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="password" placeholder="Sua senha" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>
  </div>
</div>

<footer class="footer">
  <div class="container">
    <p>&copy; 2024 Todos os direitos reservados.</p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
