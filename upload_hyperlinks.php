<?php
require('db_connect.php');

if(isset($_POST['submit'])) {
    $movie_name = $_POST['name'];
    $video = $_POST['hyperlink'];
    $embed_code = substr($video, 32);
    $thumbnail = $_POST['picture'];

    if(!empty($movie_name) && !empty($video)) {
        mysqli_query($conn, "INSERT INTO hyper_videoes (name, video, embed_code, picture) VALUES ('$movie_name', '$video', '$embed_code', '$thumbnail')");
    }

    //mysqli_close($conn);

    header("location: index_temp.php?added='$movie_name'");
}
?>