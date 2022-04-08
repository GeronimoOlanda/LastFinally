<?php
include ("../config/database.php");
include_once("../messages/messages.php");
//real_escape_string(
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = md5($_POST["password"]);
$repassword = md5($_POST["repassword"]);
$selected = $_POST["selected"];

//validation datas

//insert
try{
  $sql = 'INSERT INTO users (fullname, email, username, password, codigo_departamento) VALUES (:fullname, :email, :username, :password, :selected)';

  $statement = $link->prepare($sql);
  $statement->bindParam(":fullname", $fullname, PDO::PARAM_STR);
  $statement->bindParam(":email",    $email,    PDO::PARAM_STR);
  $statement->bindParam(":username", $username, PDO::PARAM_STR);
  $statement->bindParam(":password", $password, PDO::PARAM_STR);
  $statement->bindParam(":selected", $selected, PDO::PARAM_STR);
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


