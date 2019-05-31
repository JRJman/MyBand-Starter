<?php
  $con = dbConnect();
  $sql = "SELECT * FROM agenda WHERE id='$id'";
  $statement = $con->query($sql);

  foreach ($statement as $rij) {
    echo "<h2>" . $rij['titel'] . "</h2>";
    echo "<h4>Het bericht</h4>";
    echo "<p>" . $rij['bericht'] . "</p>";
  }
?>
