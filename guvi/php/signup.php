<?php

require "dbconn.php";
$conn = get_connection();

header('Content-Type: application/json; charset=utf-8');

mysqli_query(get_connection(),"CREATE TABLE IF NOT EXISTS `guvipro`.`user` (`id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(256) NOT NULL , `password` VARCHAR(256) NOT NULL , `name` VARCHAR(256) NOT NULL ,`age` INT NOT NULL ,  `mobile` VARCHAR(25) NOT NULL, PRIMARY KEY (`id`), UNIQUE (`email`));");

$conn = get_connection();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$age=$_POST['age'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)){


$stmt =  mysqli_prepare($conn,"INSERT INTO `user` (`id`, `email`, `password`, `name`, `age`, `mobile`) VALUES (NULL, ?, ?, ?,?,?)");
$stmt->bind_param("sssis",$email,$password,$name,$age,$mobile);
if($stmt->execute()) {
  echo("success");  
   header("Location:login.html");
} 
else{
    echo("email already registered");

}
$stmt->close();
}
?>

