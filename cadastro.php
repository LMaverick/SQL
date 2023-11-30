<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <form action="recebe-cadastro.php" method="post">
      <div class="form-control">
        <div class="mb-3">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" />
        </div>
        <div>
          <label for="nome">Email</label>
          <input type="text" name="email" class="form-control" />
        </div>
        <div>
          <button type="submit" class="btn btn-primary mt-4">Enviar</button>
        </div>
      </div>  
    </form>
   

  </div>
  
</body>
</html>