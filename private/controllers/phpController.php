<?php
class phpController {
  function phpPage($tekst){
    if($tekst == "wachtwoordA"){
      require '../private/includes/wachtwoord_aanpassen.php';
    } else if($tekst == "wachtwoordU"){
      require '../private/includes/wachtwoord_updaten.php';
    } else if($tekst == "emailA"){
      require '../private/includes/email_aanpassen.php';
    } else if($tekst == "emailU"){
      require '../private/includes/email_updaten.php';
    }
  }
}
?>
