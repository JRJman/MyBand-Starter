<?php
  function SQLselect($con,$table,$what,$where,$whereColumn,$whereVar, $whereAmount){
    $statement = "";
    if($where){
      $wheres = '';
      for ($i=0; $i < $whereAmount; $i++) {
        $where = $where . $whereColumn[$i] . '=' . $whereVar[$i];
        if($i + 1 != $whereAmount){
          $where = $where . ' AND ';
        }
      }
      $sql = "SELECT $what FROM $table WHERE $wheres";
      $statement = $con->query($sql);
    }else{
      $sql = "SELECT $what FROM $table";
      $statement = $con->query($sql);
    }
    return $statement;
  }

  function SQLupdate($con,$table, $arrayValues, $arrayAmount){
    $statement = SQLselect($con,'account','*','geen',false,'','',0);
    $id = 0;
    foreach ($statement as $rij) {
      $id = $rij['id'] + 1;
    }

    $values = "'$id',";
    for ($i=0; $i < $arrayAmount; $i++) {
      $vaules = $values . $arrayValues;
      if ($i+1 != $arrayAmount) {
        $values = $values . ',';
      }
    }

    $sql = "INSERT INTO $table VALUES ($values)";
    $statement = $con->query($sql);
    return $statement;
  }

  function SQLupdate($con,$table, $whatColumn, $whatvar, $whereColumn, $whereVar){
    $sql = "UPDATE $table SET $whatColumn=$whatvar WHERE $whereColumn=$whereVar";
    $statement = $con->query($sql);
    return $statement;
  }

  function SQLdelete(){
  }
?>
