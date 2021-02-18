<?php
require('db_connect.php');

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