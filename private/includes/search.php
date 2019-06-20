<?php
  require "functions.php";
  require "../models/model.php";

$search = $_GET['search'];
  $nummerGet = $_GET['nummer'];

  $nummer1 = $nummerGet * 2;
  $nummer2 = $nummer1 - 1;
  $nummer3 = 1;

  $con = dbConnect();
  $statement = SQLSearch($con,$search);


echo "<div id=berichten>";
  foreach ($statement as $rij) {
    if($nummer3 == $nummer1 || $nummer3 == $nummer2){
      echo "<div class=bericht>";
      echo "<h4>" . $rij['titel'] . "</h4>";
      echo "<img src=images/" . $rij['img'] . ">";
      echo "<p>" . $rij['tekst'] . "</p>";
      echo "<h6>" . $rij['datum'] . "</h6>";
      echo "<p><a href=" . $rij['bron'] . " target=blank>bron</a></p>";
      echo "</div>";
    }
    $nummer3++;
  }
  echo "</div>";
  if($nummer3 > 3){
    $statement = SQLsearch($con, $search);

    $boolean = true;
    $nummer = 1;

    echo "<div id=pages>";
    foreach ($statement as $rij) {
      if($boolean){
        echo "<input type='button' value=" . $nummer . " onclick=send(" . $nummer . ")>";
        $boolean = false;
      } else {
        $nummer++;
        $boolean = true;
      }
    }
    echo "</div>";
  }
?>
