<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./src/controllers/loginController.php" method="POST">
        <div class="container">
            <label for="username">Nome de Usuario ou seu email</label><br>
            <input type="text" name="username" id="username" placeholder="Digite seu nome de usuario..."><br>

            <label for="password">Senha</label><br>
            <input type="password" name="userpassword" id="userpassword" placeholder="Digite sua senha..."><br>
            <button type="submit">EFETUAR LOGIN</button>
            <p>Não possui cadastro? <span><a href="./src/views/Register/register.php">Cliqu aqui</a> </span>e se cadastre</p>
        </div>
    </form>
</body>
</html>