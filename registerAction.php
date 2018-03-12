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

$sql = "INSERT INTO users(name, email, password, mobile, age)
VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['mobile']."','".$_POST['age']."')";

if (mysqli_query($conn, $sql)) {
	
    echo "<h1 align='center' style='color:red;'>Account created successfully</h1>";
    
    echo "<script>setTimeout(function() {
    window.location = 'login_page.html';
  }, 2000);
</script> ";
    //echo "<script> window.open('login_page.html','_self'); </script> ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
