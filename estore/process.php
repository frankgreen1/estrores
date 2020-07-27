<?php
require_once("library.php");
$lib = new processes();
$lib->getConnection();
$errorCode = 0;

/*if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];


    $errorEmpty =false;
    $errorEmail =false;

    if (empty($name) || empty($email) || empty($message)){
        echo "<span class='form-error'>Fill in all fields!</span>";
        $errorEmpty = true;
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<span class='form-error'>write a valid email!</span>";
        $errorEmail = true;
    }
    else{
        echo "<span class='form-success'>Mail has been sent!</span>";
    }
}
else{
    echo "There was an error!";
}*/


$query ="INSERT INTO registered_tb (FNAME, LNAME, EMAILADD, USERNAME, PASSWORD)
VALUES ('".$_POST['FNAME']."','".$_POST['LNAME']."','".$_POST['EMAILADD']."','".$_POST['USERNAME']."','".$_POST['PASS']."')";
//Execute the query
$result = $lib->query_sql($query);
//validate the executed query.
if ($result === true &&  $errorCode ==0) {

    $error ="registration successful";
    header("location:login.sign.php?error=$error");
    die();
}
else{
    header("location:register.sign.php?error=$result");
}






//echo "<h1>Your now successfully resgistered!</h1>";

?>

