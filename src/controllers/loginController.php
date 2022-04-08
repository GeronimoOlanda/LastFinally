<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: Processing/welcome.php");
  exit;
}

include ("../config/database.php");

$username = $_POST["username"];
$password = md5($_POST["password"]);


//validation datas

//insert
try{
    $sql = 'SELECT username, password from users WHERE username = :username OR password = :password';
    $statement = $link->prepare($sql);

    $statement->bindParam(":username", $username, PDO::PARAM_STR);
    $statement->bindParam(":password", $password, PDO::PARAM_STR);

    $statement->execute();

    //verificando se existe
    $result = $statement->rowCount();
    $_SESSION["username"] = $username;
    if($result > 0){


      header("location: Processing/welcome.php");
    }else{
      header("location: ../../index.php");
    }

}catch(PDOException $exception){
  echo("Ocorreu um erro" . $exception);

}
