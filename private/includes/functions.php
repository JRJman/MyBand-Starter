<?php

function dbConnect()
{

    $config = require __DIR__ . '/config.php';

    try {
        $dsn = 'mysql:host=' . $config['DB_HOST'] . ';dbname=' . $config['DB_NAME'];

        $connection = new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD']);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;

    } catch (\PDOException $e) {
        echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
    }

}

function nieuwsBerichten(){
  $con = dbConnect();

  $sql = "SELECT * FROM nieuwsbericht";
  $statement = $con->query($sql);

  foreach ($statement as $rij) {
    echo "<div class=bericht>";
    echo "<h4>" . $rij['titel'] . "</h4>";
    echo "  <img src=images/" . $rij['img'] . ">";
    echo "<p>" . $rij['tekst'] . "</p>";
    echo "<h6>" . $rij['datum'] . "</h6>";
    echo "<p><a href=" . $rij['bron'] . " target=blank>bron</a></p>";
    echo "</div>";
  }
}
