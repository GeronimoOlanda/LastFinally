<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../../public/css/register.css">
    <link rel="shortcut icon" href="./../../../public/images/icon/enterprise.png" type="image/png">
    <title>Pagina Registro</title>
</head>
<body>
    <h2>DADOS CADASTRAIS</h2>
    <form action="">
      <div class="wrapper">
        <div class="containr">
          <label for="name">Nome Completo:</label><br>
          <input type="text" name="name" id="name"><br><br>

          <label class="label_form1"  for="email">Email:</label><br>
          <input type="email" name="email" id="email"><br><br>

          <label class="label_form2"  for="username">Usuario:</label><br>
          <input type="text" name="username" id="username"><br><br>

          <label class="label_form3" for="password">Senha:</label><br>
          <input type="password" name="password" id="password"><br><br>

          <label class="label_form4" for="repassword">Confirmar Senha:</label><br>
          <input type="password" name="repassword" id="repassword"><br><br>

          <select name="funcao">
              <option value="0">Função/Departamento</option>
              <option value="1">Programação/TI</option>
              <option value="2">Setor Contabil</option>
              <option value="3">Setor RH</option>
              <option value="4">Outro Setor</option>
          </select><br>

          <button type="submit" class="btn btn-success">EFETUAR LOGIN</button>
          <p> <span><a href="./../../../index.php" style="color:red;"><strong>Retornar Pagina de Login</strong></a> </span></p>
        </div>
      </div>
    </form>
</body>
</html>