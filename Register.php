<!DOCTYPE html>
<html>
    <?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$conn= new mysqli('localhost','root','','project_it');
if($conn->connect_error){
    die('Connection error:'.$conn->connect_error);
}
$sql="INSERT INTO `login`(`username`,`email`, `password`) VALUES ('".$username."','".$email."','".$password."')";
include('HomeRegister.php');
$conn ->query($sql);
?>
</html>
