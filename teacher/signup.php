<?php 
error_reporting();
session_start();
include('./config.php');
if(isset($_POST['submit']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$subject = $_POST['sub'];
$sql ="INSERT INTO teachers(tname,password,subject) values (:uname,:pass,:sub)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':pass', $password, PDO::PARAM_STR);
$query-> bindParam(':sub', $subject, PDO::PARAM_STR);
$query-> execute();
if($query->rowCount() > 0){
    echo "Sign up Successful!";
} else {
    echo "Something went wrong, Please try again.";
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
    <center><h1>Create an account.</h1></center>
    <center>
        <form name="submit" action="submit.php" method="post">
            <p>Enter the details below.</p>
            <label for="uname"> Username : </label>
                <input type="text" name="uname" required> <br><br>
            <label for="password"> Password : </label>
                <input type="password" name="password" required> <br><br>
            <label for="password"> Confirm Password : </label>
                <input type="password" name="confirmpassword" required> <br><br>
            <label for="subject"> Subject : </label>
                <input type="text" name="sub" required> <br><br>
            <input type="submit" name="submit" value="submit">
         </form> <br><br>
</a>
         
    </center>
</body>
</html>