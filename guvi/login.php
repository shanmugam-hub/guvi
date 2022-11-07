<?php

// require 'useractions.php';

// header('Content-Type: application/json; charset=utf-8');

// session_start();
// $email=$_POST['email'];
// $password=$_POST['password'];

// if (isset($_POST['login'])) {
//     $user = fetch_user_by_email($email);
    
//     $response = [ 'success' => true, 'message' => ' loggedin Successfully !'];

//     if ($user) {
       

//         if (password_verify($password, $user['password'])) {
//             $_SESSION['email'] = $user['email'];
//             $_SESSION['loggedin'] = true;
//             $response['session'] = true;

//         } else {
//             $response['success'] = false;
//             $response['message'] = 'Incorrect Password !';
//         }
//     } else {
//         $response['success'] = false;
//         $response['message'] = 'User does not exist !';
//     }

//     echo json_encode($response);
// }
session_start();
require "dbconn.php";
$conn = get_connection();
if(isset($_POST['email'])){
    $sql="select * from user where email='".$_POST['email']."' and password ='".$_POST['password']."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['loggedin'] = true;
       echo'yes';
    }
    else {
        echo'no';






}
}