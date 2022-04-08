<?php
include ("../config/database.php");
session_start();


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
    echo($result);
    if($result > 0){

      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';
      echo '<br /><br /><a href="logout.php">Logout</a>';
    }

}catch(PDOException $exception){
  echo("Ocorreu um erro" . $exception);

}

