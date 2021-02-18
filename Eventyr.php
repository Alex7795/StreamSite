<?php
require('layout.php');
require('db_connect.php');

$find_videos = mysqli_query($conn, "SELECT * FROM hyper_videoes WHERE movie_type = 'Fantasy'");
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
    window.location.href = 'ajax.php?id=' + id + '&back=Eventyr' 
  } 
  else {
    window.location.href = 'ajax.php?id=' + id + '&back=Eventyr' 
  }
}
</script>