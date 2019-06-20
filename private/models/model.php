<?php
  require "statements.php";

  function SQLsearch($con, $search){
    $sql = "SELECT * FROM nieuwsbericht WHERE tekst LIKE '%$search%' ORDER BY datum DESC";
    $statement = $con->query($sql);
    return $statement;
  }
?>
