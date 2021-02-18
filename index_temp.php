<?php require('layout.php'); 
require('db_connect.php'); ?>
<div style="display:block">
<h1>Upload Videos To Database</h1>

<p>
<form action="upload_hyperlinks.php" method="POST">
    <p>Movie Name: </p><input type="text" name="name"/><br><br>
    <p>Insert Hyperlink: </p><input type="text" name="hyperlink"/><br><br>
    <p>Insert Picture Link: </p><input type="text" name="picture"><br><br>
    <p>Movie Genre: </p><select name="genre">
    <?php $result= mysqli_query($conn, 'SELECT `movie_type` FROM `hyper_videoes` GROUP BY `movie_type`'); ?>
    <?php while($row= mysqli_fetch_assoc($result)) { ?>
        <option><?php echo $row['movie_type']; ?></option>
    <?php } ?>
</select><br><br>
    <input type="submit" name="submit" value="Upload"/>
</form>
<?php if(isset($_GET['added'])) { if($_GET['added']) { $added = $_GET['added']; echo "Added $added to the movie list"; } } ?>
</p>
</div>
</div>
</div>
</body>
</html>