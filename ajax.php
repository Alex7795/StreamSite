<?php
  require('db_connect.php');
  $id=$_GET['id'];
  $back=$_GET['back'];

  $check = "select `my_list` from `hyper_videoes` where `id`=$id;";
  $res = $conn->query($check);
  $row = mysqli_fetch_assoc($res);
  if($row['my_list'] == 1) {
    $sql = "UPDATE `hyper_videoes` SET `my_list` = '0' WHERE `id` = $id;";
    $result = $conn->query($sql);
    
    header('Location: '.$back.'.php');
    
  } else {  
    $sql = "UPDATE `hyper_videoes` SET `my_list` = '1' WHERE `id` = $id;";
    $result = $conn->query($sql);
    
    header('Location: '.$back.'.php');
}
?>