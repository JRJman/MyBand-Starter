<?php
  function nieuwsBerichten(){
    $con = dbConnect();

    $sql = "SELECT * FROM nieuwsbericht";
    $statement = $con->query($sql);

    foreach ($statement as $rij) {
      echo "<div class=bericht>";
      echo "<h4>" . $rij['titel'] . "</h4>";
      echo "  <img src=images/" . $rij['img'] . ">";
      echo "<p>" . $rij['tekst'] . "</p>";
      echo "<h6>" . $rij['datum'] . "</h6>";
      echo "<p><a href=" . $rij['bron'] . " target=blank>bron</a></p>";
      echo "</div>";
    }
  }
?>
