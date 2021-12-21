<?php 
error_reporting(1);
session_start();
include('./config.php');
if(isset($_POST['signup']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$subject = $_POST['sub'];
$sql ="INSERT INTO teachers(uname,password,subject) values (:uname,:pass,:sub)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':pass', $password, PDO::PARAM_STR);
$query-> bindParam(':sub', $subject, PDO::PARAM_STR);
$query-> execute();
if($query->rowCount() > 0){
    echo "Sign Successful!";
} else {
    echo "Something went wrong, Please try again.";
}
}
?>