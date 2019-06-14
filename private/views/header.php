<?php
  session_start();
  $header = false;
  if(!empty($_SESSION['id'])){
    if(!empty($_SESSION['ver'])){
      $con = dbConnect();
      $sql = "SELECT * FROM account";
      $statement = $con->query($sql);
      foreach ($statement as $rij) {
        if($_SESSION['id'] === $rij['id']){
          if($_SESSION['ver'] === $rij['vertificatie']){
            $header = true;
          }
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page;?></title>
    <link rel="stylesheet" href="http://localhost:8080/test/public/css/header.css">
    <link rel="stylesheet" href="http://localhost:8080/test/public/css/<?php echo $page; ?>.css">
    <link rel="stylesheet" href="http://localhost:8080/test/public/css/footer.css">
  </head>
  <body>
    <div id="header">
      <img id="logo" src="#" alt="logo">
      <h1 id="h1">badminton</h1>
      <input type="checkbox" id="menuButton">
      <label for="menuButton" id="labelMenuButton"></label>
      <nav>
        <ul>
          <label for="menuButton" id="labelMenuButton2"></label>
          <li id="home"><a href="http://localhost:8080/test/public/">Home</a></li>
          <li id="geschiedenis"><a href="http://localhost:8080/test/public/geschiedenis">Geschiedenis</a></li>
          <li id="spelregels"><a href="http://localhost:8080/test/public/spelregels">Spelregels</a></li>
          <li id="contactformulier"><a href="http://localhost:8080/test/public/contactformulier">Contactformulier</a></li>
          <li id="agenda"><a href="http://localhost:8080/test/public/agenda">Agenda</a></li>
          <?php
            if($header == true){
              echo "<li id='log_out'><a href='http://localhost:8080/test/public/uitloggen'>Uitloggen</a></li>";
              echo "<li id='profiel'><a href='http://localhost:8080/test/public/profiel'>Profiel</a></li>";
            } else {
              echo "<li id='log_in'><a href='http://localhost:8080/test/public/log_in-registeren'>Log in/Registeren</a></li>";
            }
          ?>
          <li id="admin"><a href="http://localhost:8080/test/public/admin">Admin</a></li>
        </ul>
      </nav>
    </div>
