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
  $whereColumn = array('id');
  $whereVar = array($variable);
  SQLdelete($con, 'account', $whereColumn, $whereVar, 1);
  header("Location: http://www.jrjweb.nl/myband/public/admin");
}
?>
