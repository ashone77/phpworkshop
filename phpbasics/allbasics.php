<?php

$name = "kumaran"; //string
$rollno = 10;   // integer
$pass = true; //boolean

// echo "Kumaran ";
// echo $name;
// echo($name);

// for($i=1; $i<=5; $i++) {
//     for($j=1; $j<=$i; $j++)
//     {
//     echo '*';
//     }
//     echo '<br>';
//     }


?>

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
$flag = false;
?>

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam hic fugit sequi animi nam. Doloribus voluptatibus quo eius iste. Repellat, repellendus aperiam vitae reiciendis in assumenda quae. Officia, porro maiores!</p>

<?php 
if($flag == true){ ?>
    <p>Flag True</p>
<?php } else { ?> <p>Flag false</p>
<?php 
}
    ?>

</body>
</html>



