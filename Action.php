<!DOCTYPE html>
<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="topnav">
  <a href="Streaming.php">Home</a>
  <a href="MinListe.php">Min Liste</a>
  <a href="FortsætMedAtSe.php">Fortsæt med at se</a>

  <div class="dropdown">
    <button class="dropbtn">Film
      
    </button>
    <div class="dropdown-content">
      <a class="active" href="Action.php">Action</a>
      <a href="Gyser.php">Gyser</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Serier 
    
    </button>
    <div class="dropdown-content">
      <a href="Eventyr.php">Eventyr</a>
      <a href="Komedie.php">Komedie</a>
    </div>
  </div> 

  <input type="text" placeholder="Search..">
</div>

<div class="grid-container" style="padding:15px">
<div class="container">
<?php
require('db_connect.php');

$find_videos = mysqli_query($conn, "SELECT * FROM hyper_videoes WHERE movie_type = 'Action'");
while($row = mysqli_fetch_assoc($find_videos)) {
  $id = $row['id'];
  $name = $row['name'];
  $my_list = $row['my_list'];
  $thumbnail = $row['picture'];
  echo '<div style="text-align:center;display:inline-block">';
  echo '<div style="display:block">';
  echo '<label style="display:block"><b>'.$row["name"].'</b></label>';
  echo '<input type="checkbox" name="checkbox" '.($row["my_list"]==1 ? 'checked ' : '').'onclick="myFunction('.$row["id"].')" id="'.$row["id"].'"/><label>Min liste</label>';
  echo '</div>';
  echo '<a href="watch_temp.php?id='.$id.'"><input class="item" type="image" src="'.$thumbnail.'" alt="Submit" width="200" height="300"></a>';
  echo '</div>';
}
?>
  </div>
</div>
</body>
<script>
function myFunction(id) {
  var checkBox = document.getElementById(id);
  if (checkBox.checked == true) {
    window.location.href = 'ajax.php?id=' + id + '&back=Action' 
  } 
  else {
    window.location.href = 'ajax.php?id=' + id + '&back=Action' 
  }
}
</script>