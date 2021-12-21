<?php
session_start();
include('./config.php');
if(isset($_POST['submit']))
{
$stname=$_POST['stname'];
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$sql ="INSERT INTO st_table(sname,m1,m2,m3) values (:sname,:m1,:m2,:m3)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':sname', $stname, PDO::PARAM_STR);
$query-> bindParam(':m1', $m1, PDO::PARAM_STR);
$query-> bindParam(':m2', $m2, PDO::PARAM_STR);
$query-> bindParam(':m3', $m3, PDO::PARAM_STR);

$query-> execute();
if($query->rowCount() > 0){
    echo "Student details updated!";
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
    <title>Student Details</title>
</head>
<body>
    <p>Students Details</p>
    <center>
        <form name="submit" action="" method="post">
            <p>Enter the details below.</p>
            <label for="uname"> Student Name : </label>
                <input type="text" name="stname" required> <br><br>
            <label for="m1"> Mark 1 : </label>
                <input type="text" name="m1" required> <br><br>
            <label for="m2"> Mark 2 : </label>
                <input type="text" name="m2" required> <br><br>
            <label for="m3"> Mark 3 : </label>
                <input type="text" name="m3" required> <br><br>
            <input type="submit" name="submit" value="submit">
         </form> <br><br>
</a>
         
    </center>
</body>
</html>