<?php
if(isset($_POST['submit'])) {
    $movie_name = $_POST['name'];
    $video = $_POST['hyperlink'];
    
    $conn = mysqli_connect('localhost', 'root', '', 'valgfag');
    if (!$conn) {
        die('Could not connect: ' . mysqli_error());
    }
    //echo 'Connected successfully';

    if(!empty($movie_name) && !empty($video)) {
        mysqli_query($conn,"INSERT INTO hyper_videoes (name, video) VALUES ('$movie_name', '$video')");
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload Videos</title>
</head>
<body>
    <form action="" method="POST">
        <p>Movie Name: </p><input type="text" name="name"/><br><br>
        <p>Insert Hyperlink: </p><input type="text" name="hyperlink"/><br><br>
        <input type="submit" name="submit" value="Upload"/>
    </form>
</body>
</html>