<?php

  session_start();
  //colocar em todas as paginas para verficar se o usuario esta logado, caso nao esteja, sera redirecionado para a pagina de login
  if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
      header("location: ../../../../index.php");
      die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <header>
      <nav>
        <ul>
          <li><a href="../../../controllers/Processing/logout.php">LOGOUT</a></li>
        </ul>
      </nav>
    </header>
</body>
</html>