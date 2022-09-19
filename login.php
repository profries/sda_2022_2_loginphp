<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Login</title>
</head>
<body>
    <h1>Login</h1> 
    <!-- Formulário de Login -->
  <form action="validacao.php" method="post">
    <div class="container">
        <label for="usuario"><b>Usuário</b></label>
        <input type="text" placeholder="Digite o usuário"
            name="usuario" id="usuario" required />
        <label for="senha"><b>Senha</b></label>
        <input type="password" placeholder="Descreva o usuário" 
            name="senha" id="senha" required />
  
        <input type="submit" value="Entrar" />
      </div>
    </form>
</body>
</html>