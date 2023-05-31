<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$idnumber = $_POST['idnumber'];

$sql = "INSERT INTO users VALUES('$id','$name','$lastname','$idnumber')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>