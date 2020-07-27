<?php
session_start();
require_once("library.php");
$lib = new processes();
$lib->getConnection();
if (isset($_SESSION['loggedIN'])){
    header('location:demo.php');
    exit();
}


if (isset($_POST['login'])){
    $email = mysqli_escape_string($lib->con,$_POST['emailPHP']) ;
    $password = mysqli_escape_string($lib->con,$_POST['passwordPHP']) ;

    $hashed_password = md5($password);

$query ="SELECT * FROM  admin_tb where email = '$email' and password ='$hashed_password'";

    $result= $lib->query_sql($query);
 if ($result == true){
     $_SESSION['loggedIN']= '1';
     $_SESSION['email']=$email;
     exit('<font color="green">login success.....</font>');
 }else
     exit('<font color="red">plase check input</font>');

}

?>