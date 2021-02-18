<!DOCTYPE html>
<html>
<head>
<!-- <title>Watch Videos</title> -->
</head>
<body>

<?php
require('db_connect.php');

$id = $_GET['id'];

$find_video = mysqli_query($conn, "SELECT * FROM hyper_videoes WHERE id = '$id'");
while($row = mysqli_fetch_assoc($find_video)) {
    $name = $row['name'];
    $code = $row['embed_code'];
}
?>
<title>Now Watching <?= $name; ?></title>
<h1><?= $name; ?></h1>

<iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $code; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>