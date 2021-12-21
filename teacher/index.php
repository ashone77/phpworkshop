<?php 
session_start();
include('./config.php');
if(isset($_POST['signin']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT tname,password FROM teachers WHERE tname=:uname and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
if($query->rowCount() > 0){
    echo "Login Successful!";
} else {
    echo "Incorrect Login, Please try again.";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Login</title>
</head>
<body>
    <center><h1>Teacher's Login</h1></center>
    <center>
        <form action="" method="post">
            <p>Enter the details below.</p>
            <label for="uname"> username : </label>
            <input type="text" name="uname" required> <br>
            <label for="password"> password : </label>
            <input type="password" name="password" required> <br>
            <input type="submit" name="signin" value="Sign in">
         </form> <br><br>
         <label for="">Sign up if you do not have an account.</label>
         <a href=signup.php>
    <button>Sign Up</button>
</a>
         
    </center>
</body>
</html>