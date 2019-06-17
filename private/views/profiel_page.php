<?php
  $checker = false;
  $gebruikersnaam = "";
  $email = "";


  if(!empty($_SESSION['id'])){
    if(!empty($_SESSION['ver'])){
      $con = dbConnect();
      $sql = "SELECT * FROM account";
      $statement = $con->query($sql);
      foreach ($statement as $rij) {
        if($_SESSION['id'] === $rij['id']){
          if($_SESSION['ver'] === $rij['vertificatie']){
            $checker = true;
            $gebruikersnaam = $rij['gebruikersnaam'];
            $email = $rij['email'];
          }
        }
      }
    }
  }

  if($checker == false){
    header("Location: http://localhost/test/public/");
  }
?>

<h2><?php echo $gebruikersnaam ?></h2>
<h4>Persoonlijke gegevens</h4>
<p>
  <input type="button" id="wachtwoord" value="Wachtwoord aanpassen"><br><br>
  Email: <?php echo $email ?>
  <input type="button" id="email" value="Email aanpassen">
</p>
<script src="js/profiel.js"></script>
