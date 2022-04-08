<?php
include ("../config/database.php");
include_once("../messages/messages.php");

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$selected = $_POST["selected"];

//validation datas

//insert
try{
  $sql = 'INSERT INTO users (fullname, email, username, password) VALUES (:fullname, :email, :username, :password, :selected)';

  $statement = $link->prepare($sql);
  $statement->bindParam(":fullname", $fullname);
  $statement->bindParam(":email", $email);
  $statement->bindParam(":username", $username);
  $statement->bindParam(":password", $password);
  $statement->bindParam(":selected", $selected);
  $statement->execute();
  $result = $statement-> fetchAll(PDO::FETCH_OBJ);

  header("location: ../views/Register/register.php");

  $message = $cadastro_message_success;

  if($statement->rowCount() > 0){
    echo $message;
  }


}catch(PDOException $exception){
  echo("Ocorreu um erro" . $exception);

}


//update

//delete

//pesquisar um usuario

//pesquisar todos os usuarios

//listagem dos dados


