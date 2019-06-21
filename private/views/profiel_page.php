<?php
if (!empty($_SESSION['id'])) {
    if (!empty($_SESSION['ver'])) {
        $con = dbConnect();
        $array = profielVars($con, $_SESSION['id'], $_SESSION['ver']);
    }
}

$checker = false;
$gebruikersnaam = "";
$email = "";

if(!empty($array)){
    $checker = $array[0];
    $gebruikersnaam = $array[1];
    $email = $array[2];
}

if ($checker == false) {
    header("Location: http://www.jrjweb.nl/myband/test/public/");
}
?>

<h2><?php echo $gebruikersnaam ?></h2>
<h4>Persoonlijke gegevens</h4>
<p>
    <input type="button" id="wachtwoord" value="Wachtwoord aanpassen"><br><br>
    Email: <?php echo $email ?>
    <input type="button" id="email" value="Email aanpassen">
</p>
<script src="js/profiel.js"></script>
