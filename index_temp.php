<!DOCTYPE html>
<html>
<head>
<title>Embed Videos From Link</title>
</head>
<body>

<h1>Upload Videos To Database</h1>
<p><a href="Action.php">Action Movies</a></p>

<p>
<form action="upload_hyperlinks.php" method="POST">
    <p>Movie Name: </p><input type="text" name="name"/><br><br>
    <p>Insert Hyperlink: </p><input type="text" name="hyperlink"/><br><br>
    <p>Insert Picture Link: </p><input type="text" name="picture"><br><br>
    <p>Movie Genre: </p><input type="text" name="genre"><br><br>
    <input type="submit" name="submit" value="Upload"/>
</form>
<?php if(isset($_GET['added'])) { if($_GET['added']) { $added = $_GET['added']; echo "Added $added to the movie list"; } } ?>
</p>

</body>
</html>