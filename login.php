<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "valgfag";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['uname'];
$psw = $_POST['psw'];

$password = md5($psw);

$sql = "SELECT `password` FROM `login` where username='$name'";
$result = $conn->query($sql);
$res = mysqli_fetch_assoc($result);
if ($res > 0) {
    if($res['password'] === md5($psw)) {
        header("Location: Streaming.php");
    }
    else {
        header("Location: login.html");
    }
} else {
    header("Location: login.html");
}
mysqli_close($conn);
?>