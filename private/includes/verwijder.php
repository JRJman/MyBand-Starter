<?php
session_start();
$boolean = false;
if(!empty($_SESSION['a'])){
  if($_SESSION['a'] == "true"){
    $boolean = true;
  }
}
if(!$boolean){
  header("Location: http://www.jrjweb.nl/myband/public/");
} else {
  $con = dbConnect();
  $sql = "DELETE FROM account WHERE id='$variable'";
  $con->query($sql);
  header("Location: http://www.jrjweb.nl/myband/public/admin");
}
?>
