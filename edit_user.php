<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$idnumber = $_POST['idnumber'];

$sql="UPDATE users SET name='$name', lastname='$lastname', idnumber='$idnumber' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>