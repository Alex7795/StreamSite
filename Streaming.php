<!DOCTYPE html>
<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="Streaming.php">Home</a>
  <a href="MinListe.php">Min Liste</a>
  <a href="FortsætMedAtSe.php">Fortsæt med at se</a>

  <div class="dropdown">
    <button class="dropbtn">Film
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Action.php">Action</a>
      <a href="Gyser.php">Gyser</a>
      <a href="Komedie.php">Komedie</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Serier 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Action.php">Action</a>
      <a href="Gyser.php">Eventyr</a>
      <a href="Komedie.php">Komedie</a>
    </div>
  </div> 

  <input type="text" placeholder="Search..">
</div>
<div class="grid-container" style="padding:15px">
<div class="container">
<input class="item" type="image" src="img/Woods.jpg" alt="Submit" width="200" height="300">
<input class="item" type="image" src="img/Woods.jpg" alt="Submit" width="200" height="300">
<input class="item" type="image" src="img/Woods.jpg" alt="Submit" width="200" height="300">
<input class="item" type="image" src="img/Woods.jpg" alt="Submit" width="200" height="300">
<input class="item" type="image" src="img/Woods.jpg" alt="Submit" width="200" height="300">
<input class="item" type="image" src="img/Woods.jpg" alt="Submit" width="200" height="300">
<input class="item" type="image" src="img/Woods.jpg" alt="Submit" width="200" height="300">
<input class="item" type="image" src="img/Woods.jpg" alt="Submit" width="200" height="300">
<input class="item" type="image" src="img/Woods.jpg" alt="Submit" width="200" height="300">
</div>
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

  $sql = "SELECT `picture`, `name` FROM `hyper_videoes`";
  $result = $conn->query($sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo '<div style="text-align:center;display:inline-block">';
      echo '<div style="display:block">';
      echo '<label style="display:block"><b>'.$row["name"].'</b></label>';
      echo '<input type="checkbox" name="checkbox" id="'.$row["name"].'"/><label>Min liste</label>';
      echo '</div>';
      echo '<input class="grid-item" type="image" src="'.$row["picture"].'" alt="Submit" width="200" height="300">';
      echo '</div>';
    }
  }
?>
  </div>

</body>