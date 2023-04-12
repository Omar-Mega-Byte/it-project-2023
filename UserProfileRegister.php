<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Data/OIG.jpg">
    <title>User Profile</title>
    <style>
body{
  background-image: url(Data/wallpaperflare.com_wallpaper.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.user-profile {
  background-color: #ffffff80;
  padding: 20px;
  border: 1px solid #000000;
  border-radius: 5px;
}

.user-profile h2 {
  font-size: 24px;
  margin-top: 0;
}

.user-profile p {
  margin: 10px 0;
  font-size: 16px;
}

.user-profile strong {
  font-weight: bold;
  margin-right: 10px;
}

.user-profile span {
  font-weight: normal;
}

    </style>
</head>
<body>
  <?php
  $conn= new mysqli('localhost','root','','project_it');

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM `login` WHERE 1 ORDER BY `id` DESC LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
      die("Error retrieving variable from database: " . mysqli_error($conn));
  }
  $row = mysqli_fetch_assoc($result);
  $username = $row['username'];
  $email=$row['email'];
  $password=$row['password'];
  $id=$row['id'];
  mysqli_close($conn);
  ?>
    <div class="user-profile">
        <h2>User Profile</h2>
        <p><strong>ID: <?php echo $id; ?></strong></p>
        <p><strong>Email:<?php echo $email; ?></strong><p>
        <p><strong>Username:<?php echo $username; ?></strong></p>
        <p><strong>Password:<?php echo $password; ?></strong></p>
    </div>
</body>
</html>