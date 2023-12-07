<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <form id = "formulario" action="formulario.php" class="align-middle" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
          <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text text-light bg-dark ">Somos comprometidos com a segurança de seus dados pessoais</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword">
        </div>

        <div class="text-center p-2">

          <button type="submit" class="btn btn-primary" >Entrar</button>
          <button type="reset" class="btn btn-secondary">Limpar</button>

        </div>
        
      </form>

</body>
</html>