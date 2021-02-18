<?php
require('layout.php');
require('db_connect.php');
  
$sql = "SELECT `picture`, `name`, `id`, `my_list` FROM `hyper_videoes` where `my_list`=1";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo '<div style="text-align:center;display:inline-block">';
    echo '<div style="display:block">';
    echo '<label style="display:block"><b>'.$row["name"].'</b></label>';
    echo '<input type="checkbox" name="checkbox" '.($row["my_list"]==1 ? 'checked ' : '').'onclick="myFunction('.$row["id"].')" id="'.$row["id"].'"/><label>Min liste</label>';
    echo '</div>';
    echo '<input class="grid-item" type="image" src="'.$row["picture"].'" alt="Submit" width="200" height="300">';
    echo '</div>';
  }
}
?>
  </div>
  </div>
</body>
<script>
function myFunction(id) {
  var checkBox = document.getElementById(id);
  if (checkBox.checked == true) {
    window.location.href = 'ajax.php?id=' + id + '&back=MinListe' 
  } 
  else {
    window.location.href = 'ajax.php?id=' + id + '&back=MinListe' 
  }
}
</script>