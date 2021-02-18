<?php
require('db_connect.php');

$name = $_POST['uname'];
$psw = $_POST['psw'];
$repeat = $_POST['psw-repeat'];
$password = md5($psw);

$check = "SELECT `username` FROM `login`";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($row["username"] === $name) {
      header("Location: signup.html");
    }
    else {
      header("Location: login.html");
    }
  }
} else {
  header("Location: signup.html");
}

$sql = "Insert into `login` (username, password) values ('$name', '$password')";

if ($conn->query($sql) === TRUE) {
  header("Location: login.html");
} else {
  header("Location: signup.html");
}

mysqli_close($conn);
?>