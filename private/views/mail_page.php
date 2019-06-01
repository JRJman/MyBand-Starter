<?php
  if($tekst == "activatie"){
    echo "<p>U kunt nu inloggen op u account</p>";
    $con = dbConnect();
    $sql = "UPDATE account SET active='true' WHERE gebruikersnaam='$gebruikersnaam'";
    $con->query($sql);
  }else if($tekst == "registeren"){
    echo "<p>Er is een link naar je email adress gestuurd om je account te activeren</p>";
  }
?>
