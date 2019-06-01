<?php
  $booleanG = true;
  $booleanH = true;
  $booleanE = true;
  $booleanL = true;
  if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!empty($_GET['wachtwoordL'])){
      $booleanL = false;
      require '../private/includes/log_in.php';
    } else if(!empty($_GET['wachtwoordR1'])){
      require '../private/includes/registeren.php';
    }
  }
?>

<div id="grid">
  <div id="inloggen">
    <h2>Log In</h2>
    <?php
      if($booleanL == false){
        echo "<p class='false'>Verkeerde gebruikersnaam of wachtwoord</p>";
      }
    ?>
    <form action="" method="get">
      <label for="gebruikersnaamL">Gebruikersnaam</label><br>
      <input type="text" name="gebruikersnaamL" required><br>
      <label for="wachtwoordL">Wachtwoord</label><br>
      <input type="password" name="wachtwoordL" required><br>
      <input type="submit" value="Log in">
    </form>
  </div>
  <div id="registeren">
    <h2>Registeren</h2>
    <form action="" method="get">
      <?php
        if($booleanL == false){
          echo "<p class='false'>Deze gebruikersnaam is al in gebruik</p>";
        }?>
      <label for="gebruikersnaamR">Gebruikersnaam</label><br>
      <input type="text" name="gebruikersnaamR" required><br>
      <?php
        if($booleanL == false){
          echo "<p class='false'>Wachtwoorden zijn niet hetzelfde</p>";
        }?>
      <label for="wachtwoordR1">Wachtwoord</label><br>
      <input type="password" name="wachtwoordR1" required><br>
      <label for="wachtwoordR2">Herhaal Wachtwoord</label><br>
      <input type="password" name="wachtwoordR2" required><br>
      <?php
        if($booleanL == false){
          echo "<p class='false'>Dit emailadress is al in gebruik</p>";
        }?>
      <label for="email">Email</label><br>
      <input type="email" name="email" required><br>
      <input type="submit" value="Registeren">
    </form>
  </div>
</div>
