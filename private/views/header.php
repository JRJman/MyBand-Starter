<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page;?></title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/<?php echo $page;?>.css">
    <link rel="stylesheet" href="css/footer.css">
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
          <li><a href="">Home</a></li>
          <li><a href="informatie1">Informatie 1</a></li>
          <li><a href="informatie2">Informatie 2</a></li>
          <li><a href="agenda">Agenda</a></li>
          <li><a href="zoeken">Zoeken</a></li>
          <li><a href="profiel">Profiel</a></li>
          <li><a href="log_in-registeren">Log in/Registeren</a></li>
          <li><a href="admin">admin</a></li>
        </ul>
      </nav>
    </div>
