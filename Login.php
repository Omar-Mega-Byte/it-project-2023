<?php
$email = $_POST['email'];
$password = $_POST['password'];
$conn= new mysqli('localhost','root','','project_it');
if($conn->connect_error){
    die('Connection error:'.$conn->connect_error);
}
    $sql = "SELECT * FROM `login` WHERE email ='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "Your username or password is incorrect!";
} else {
    $id="SELECT `id` FROM `login` WHERE email ='$email' AND password='$password'";
    include('HomeLogin.php');
}

?>