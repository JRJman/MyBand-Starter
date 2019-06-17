<?php
  $boolean = false;
  if(!empty($_SESSION['a'])){
    if($_SESSION['a'] == "true"){
      $boolean = true;
    }
  }
  if(!$boolean){
    header("Location: http://localhost/test/public/");
  }
  
  $boolean = false;
  if(!empty($_POST['titel'])){
    if(!empty($_POST['tekst'])){
      if(!empty($_POST['datum'])){
        $boolean = true;
      }
    }
  }
  if(!$boolean){
    header("Location: http://localhost/test/public/verboden_voor_jouw");
  }
  $titel = $_POST['titel'];
  $tekst = $_POST['tekst'];
  $datum = $_POST['datum'];

  $datum_array = explode('-', $datum);

  $jaar = $datum_array[0];
  $maand = $datum_array[1];
  $dag = $datum_array[2];

  $con = dbConnect();
  $sql = "INSERT INTO agenda VALUES ('','$jaar','$maand','$dag','$titel','$tekst')";
  $con->query($sql);

  header("Location: http://localhost/test/public/admin");
?>
