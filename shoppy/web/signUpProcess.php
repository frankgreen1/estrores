<?php
session_start();
require_once("library.php");
$lib = new processes();
$lib->getConnection();



if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];



    $errorEmpty =false;
    $errorEmail =false;


    if (empty($name) || empty($email) || empty($password)){
        echo "<span class='form-error'>Fill in all fields!</span>";
        $errorEmpty = true;
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<span class='form-error'>write a valid email!</span>";
        $errorEmail = true;
    }

    else{
        echo "<span class='form-success'>You are an admin <br> please proceed to the login page to sign in !!!!!!</span>";

    }
}
else{
    echo "There was an error!";
}
$hashed_password = sha1($password);

$query = "INSERT INTO admin_tb (id,admin_name,email,password) values (null,'$$name','$email','$hashed_password')";
$result= $lib->query_sql($query);

/*if ($result===true){
    echo "<span class='form-success'>Succeffuly registered as an admin.
P.S procced to the login page</span>";
}
else {
    echo "<span class='form-error'> please try again!</span>";
}*/

?>
<script>
    $("#sign-name,#sign-mail ,#sign-pass").removeClass("input-error");
    var errorEmpty = "<?php echo $errorEmpty;?>";
    var errorEmail = "<?php echo $errorEmail;?>";


    if (errorEmpty == true){
        $("#sign-name, #sign-mail, #sign-pass").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#sign-name").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false){
        $("#sign-name,#sign-email,#sign-pass").val("");
    }

</script>
