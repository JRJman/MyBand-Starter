<?php require '../private/includes/functions.php'; ?>
<?php require '../private/models/model.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page;?></title>
    <link rel="stylesheet" href="http://localhost/test/public/css/header.css">
    <link rel="stylesheet" href="http://localhost/test/public/css/<?php echo $page; ?>.css">
    <link rel="stylesheet" href="http://localhost/test/public/css/footer.css">
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
          <li id="home"><a href="http://localhost/test/public/">Home</a></li>
          <li id="geschiedenis"><a href="http://localhost/test/public/geschiedenis">Geschiedenis</a></li>
          <li id="spelregels"><a href="http://localhost/test/public/spelregels">Spelregels</a></li>
          <li id="contactformulier"><a href="http://localhost/test/public/contactformulier">Contactformulier</a></li>
          <li id="agenda"><a href="http://localhost/test/public/agenda">Agenda</a></li>
          <li id="zoeken"><a href="http://localhost/test/public/zoeken">Zoeken</a></li>
          <li id="profiel"><a href="http://localhost/test/public/profiel">Profiel</a></li>
          <li id="log_in"><a href="http://localhost/test/public/log_in-registeren">Log in/Registeren</a></li>
          <li id="admin"><a href="http://localhost/test/public/admin">Admin</a></li>
        </ul>
      </nav>
    </div>
