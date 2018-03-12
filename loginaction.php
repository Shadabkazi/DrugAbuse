<?php

$servername = "localhost";
$username = "shadab";
$password = "kazi";
$dbname = "ngodata";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($conn,$_POST['username']);
$pass = mysqli_real_escape_string($conn,$_POST['password']);
$sql= "select id from users where email='$email' AND password='$pass' ";


$run_user=mysqli_query($conn, $sql);
$check_user = mysqli_num_rows($run_user);
if ($check_user>0)
{
	session_start();
$_SESSION['username']=$email;
echo "<script> window.open('index1.html','_self'); </script> ";
}
else {
echo "<script> window.open('login_page.html','_self'); alert('email or password is wrong'); </script> ";
}
mysqli_close($conn);

?>
