<?php
$username = $_POST['username'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn= new mysqli('localhost','root','','project_it');
if($conn->connect_error){
    die('Connection error:'.$conn->connect_error);
}
$sql="INSERT INTO `contactus`(`username`,`email`, `subject` ,`message`) VALUES ('".$username."','".$email."','".$subject."','".$message."')";
echo "Thanks for feedback ".$username.'<br>';

echo " Sucessfully sended";
$conn ->query($sql);
?>
