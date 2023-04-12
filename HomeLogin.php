<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<link rel="icon" href="Data/OIG.jpg">
<style>
.booking-link {
margin:18px;
display: inline-block;
background-color: #000000;
color: #fff;
padding: 10px 20px;
border-radius: 5px;
text-decoration: none;
font-size: 18px;
font-weight: bold;
transition: all 0.3s ease;
}

.booking-link:hover {
background-color: #ffffff;
color: #000000;
border: 2px solid black;
}
video{
width: 20%;
margin-left: 40%;
border-radius: 10px;
}
body {
font-family: Arial, Helvetica, sans-serif;
margin: 0;
}
.header {
padding: 80px;
text-align: center;
background-image: url(Data/minimalism-airplane-colorful-red-wallpaper-preview.jpg);
color: rgb(255, 255, 255);

}
.header h1 {

font-size: 40px;
font-family:Arial, Helvetica, sans-serif;
}
.navbar {
overflow: hidden;
background-color: #2b2929;
}

.navbar a {
float: left;
display: block;
color: white;
text-align: center;
padding: 14px 20px;
text-decoration: none;
}
.navbar a:hover {
background-color: #ffffff;
color: rgb(255, 0, 0);
}
.navbar a {
    width: fit-content;
    display: inline-block;
}
table {
	border-collapse:collapse;
	width: 100%;
}

th, td {
	padding: 8px;
	text-align: left;
	border-bottom: 1px solid #ddd;
    color: darkblue;
}

th {
	background-color: #f2f2f2;
    border-collapse:separate ;
}

tr:hover {
	background-color: #f5f5f5;
}
</style>
</head>
<body>

<div class="header">
<h1>BookMyFlight</h1>
<p>Your Way for travelling</p>
<h2>
    <?php
$conn= new mysqli('localhost','root','','project_it');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT `username` FROM `login` WHERE email='$email' AND password='$password' ";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error retrieving variable from database: " . mysqli_error($conn));
}
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
echo "Hello: " . $username;
mysqli_close($conn); ?>
</h2>
</div>

<div class="navbar">
<a href="login.html">Login</a>
<a title="For Contacting, Feedback and Complaints" href="ContactUs.html">Contact Us</a>
<a href="aboutUs.html">About Us</a>
<a href="UserProfileLogin.php">Your Profile</a>
</div>
<br><br>
<video controls autoplay src="Data/_.webm"></video>
<br><br>
<table>
    <thead>
        <tr>
            <th>Flight Number</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Departure Time</th>
            <th>Arrival Time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>AB123</td>
            <td>Helwan</td>
            <td>London</td>
            <td>08:00</td>
            <td>15:00</td>
        </tr>
        <tr>
            <td>CD456</td>
            <td>Cairo</td>
            <td>Paris</td>
            <td>16:00</td>
            <td>18:00</td>
        </tr>
        <tr>
            <td>EF789</td>
            <td>Giza</td>
            <td>Rome</td>
            <td>19:00</td>
            <td>22:00</td>
        </tr>
        <tr>
            <td>GH123</td>
            <td>Tanta</td>
            <td>New York</td>
            <td>08:00</td>
            <td>15:00</td>
        </tr>
        <td>IJ456</td>
            <td>Fayoum</td>
            <td>Manchester</td>
            <td>16:00</td>
            <td>18:00</td>
    </tbody>
</table>
<a class="booking-link" href="Booking.html">Book</a>
<br><br>
<p>© 2023 BookMyFlight. All rights reserved.</p>
</body>
</html>