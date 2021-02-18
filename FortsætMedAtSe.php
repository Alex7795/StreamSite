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
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Action.php">Action</a>
      <a href="Gyser.php">Gyser</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Serier 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Eventyr.php">Eventyr</a>
      <a class="active" href="Komedie.php">Komedie</a>
    </div>
  </div> 

  <input type="text" placeholder="Search..">
</div>
</body>