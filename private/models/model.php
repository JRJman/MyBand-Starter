<?php
  function nieuwsBerichten(){
    $con = dbConnect();

    $sql = "SELECT * FROM nieuwsbericht ORDER BY datum DESC";
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

  function resultaten($text){
    $database = dbConnect();
    $text = htmlspecialchars($text);
    $get_titel = $database->prepare("SELECT * FROM nieuwsbericht WHERE tekst LIKE concat('%', :bericht, '%') ORDER BY datum DESC");
    $get_titel -> execute(array('bericht' => $text));

    while($titels = $get_titel->fetch(PDO::FETCH_ASSOC)){
      echo "<div class=bericht>";
      echo "<h4>" . $titels['titel'] . "</h4>";
      echo "  <img src=images/" . $titels['img'] . ">";
      echo "<p>" . $titels['tekst'] . "</p>";
      echo "<h6>" . $titels['datum'] . "</h6>";
      echo "<p><a href=" . $titels['bron'] . " target=blank>bron</a></p>";
      echo "</div>";
    }
  }
?>
