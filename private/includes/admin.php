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
    $statement = SQLselect($con,'account','*','true',$whereColumn,$whereVar, 1);
    $admin = 'false';
    foreach ($statement as $rij) {
      $admin = $rij['admin'];
    }
    $whatColumn = array('admin');
    $whereColumn = array('id');
    $whereVar = array($variable);
    if($admin == 'true'){
      $whatVar = array('false');
      SQLupdate($con, 'account', $whatColumn, $whatVar, 1, $whereColumn, $whereVar, 1);
    } else {
      $whatVar = array('true');
      SQLupdate($con, 'account', $whatColumn, $whatVar, 1, $whereColumn, $whereVar, 1);
    }
    header("Location: http://www.jrjweb.nl/myband/public/admin");
  }
?>
