<form action="http://localhost:8080/test/public/php/wachtwoordA" method="post">
  <p>Typ je Email address is</p>
  <?php
    if($b == false){
      echo "<p style=color:red;>email bestaat niet</p>";
    }
  ?>
  <input type="email" name="email" required><br>
  <input type="submit" value="versturen">
</form>
