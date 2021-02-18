<!DOCTYPE html>
<head>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
  <script>
  $(document).ready(function() {
    $("#search").keyup(function() {
       var search = $('#search').val();
       if(search != "") {
         $.ajax({
           url: 'search.php',
           method: 'POST',
           data:{search:search},
           success:function(data) {
             $('#searchbar').html(data);
           }
         });
       }
       else {
         $('#searchbar').html('');
       }
     });
    });
</script>
</head>
<body>
<div class="topnav">
  <a href="Streaming.php">Home</a>
  <a href="MinListe.php">Min Liste</a>
  <a href="FortsætMedAtSe.php">Fortsæt med at se</a>
  <a href="index_temp.php">Tilføj film eller serie</a>
  
  <div class="dropdown">
    <button class="dropbtn">Film</button>
    
    <div class="dropdown-content">
      <a href="Action.php">Action</a>
      <a href="Gyser.php">Gyser</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Serier</button>

    <div class="dropdown-content">
      <a href="Eventyr.php">Eventyr</a>
      <a href="Komedie.php">Komedie</a>
    </div>
  </div> 
  <div class="dropdown" style="float:right">
  <input type="text" id="search" placeholder="Search..">
  <div class="dropdown-content" id="searchbar" style="margin-top:2.5rem">
  </div>
  </div>
</div>
<div class="grid-container" style="padding:15px">
<div class="container">