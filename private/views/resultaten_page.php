<?php
  $zoekwoord = $_POST['zoekwoord'];
?>
<h2>Resultaten</h2>
<p id="zoekwoord">Op <?php echo $zoekwoord; ?></p>
<div id="berichten">
  <?php resultaten($zoekwoord); ?>
</div>
