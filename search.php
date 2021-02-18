<?php
require_once "db_connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Search = $_POST['search'];
    $result = mysqli_query($conn, "SELECT * FROM `hyper_videoes` where `name` like '%".$Search."%'");
 
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<a href="watch_temp.php?id='.$row['id'].'">'.$row['name'].'</a>';
           }      
    } else {
      echo '<p>No match found</p>';
    }
}
?>