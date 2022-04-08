
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="shortcut icon" href="./public/images/icon/enterprise.png" type="image/png">
    <title>LF - Pagina Inicial</title>
</head>
<body>
    <form action="./src/controllers/loginController.php" method="POST">
        <div class="wrapper">
          <div class="container">
          <?php
                if(isset($message))
                {
                     echo '<label class="text-danger">'.$message.'</label>';
                }
          ?>

            <label class="label_form1" for="username">Nome de Usuario ou seu email</label><br>
            <input type="text" name="username" id="username" placeholder="Digite seu nome de usuario..."><br>

            <label class="label_form2" for="password">Senha</label><br>
            <input type="password" name="password" id="password" placeholder="Digite sua senha..."><br><br>
            <button type="submit" class="btn btn-success">EFETUAR LOGIN</button>
            <p>Não possui cadastro? <span><a href="./src/views/Register/register.php">Clique aqui  </a> </span>e se cadastre</p>
            </div>

        </div>
    </form>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>