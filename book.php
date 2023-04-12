<!DOCTYPE html>
<html>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$departureArrival = $_POST['departure-arrival'];
$class = $_POST['class'];
$conn= new mysqli('localhost','root','','project_it');
if($conn->connect_error){
    die('Connection error:'.$conn->connect_error);
}

$sql="INSERT INTO `book` (`name`, `email`, `phone`, `departure-arrival`, `class`) VALUES ('$name', '$email', '$phone', '$departureArrival','$class')";
$conn ->query($sql);
?>
</html>
