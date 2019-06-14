<!-- <h2 class="center">Spelregels</h2>
<p class="center">Een partij wordt gespeeld om twee gewonnen games (best of three games) van 21 punten volgens het rally point systeem. De partij die het eerst 21 punten scoort wint de game, behalve als de stand 20-20 wordt bereikt; dan wint de partij die vervolgens het eerst op 2 punten voorsprong komt, de game. Bij de stand 29-29 wint de partij die het 30e punt scoort de game.</p>
<p class="center">Het badmintonveld wordt in tweeën gedeeld door een net op 1,55 meter hoogte bij de staander. In het midden moet de nethoogte minstens 1,524 meter zijn. Het net zelf moet 0,76 meter hoog zijn. De koord waarvan het net gemaakt is moet donker van kleur zijn en van gelijkmatige dikte. De maaswijdte mag variëren van 15 tot 20 millimeter. Het net moet minimaal 6,1 meter lang zijn en een witte boord hebben bovenaan van 75 millimeter die is omgeslagen over de kabel waar het net op hangt. De lijnen die het veld markeren moeten 40 millimeter dik zijn.</p>
<p class="center">Er wordt onderhands geserveerd naar het veld schuin tegenover het vak van waaruit wordt geserveerd. Hierbij moet de shuttle zich op het moment van raken zich in zijn geheel onder het middel van de serveerder bevinden. (“Het middel” is in dit verband een denkbeeldige lijn rond het lichaam van de serveerder, lopend over het laagste punt van beide onderste ribben). Tevens moet de service met één vloeiende beweging geslagen worden. De shuttle wordt over het net heen en weer geslagen (een rally). Zodra de shuttle op de grond komt en/of een fout wordt gemaakt is de rally afgelopen. Afhankelijk van of de shuttle binnen/op de lijnen (in) of buiten de lijnen (uit) valt wordt beoordeeld hoe het spel doorgaat. Als de shuttle op de grond komt door een fout van de serverende partij, wordt de service aan de andere partij overgedragen en krijgt die partij een punt. Als de fout gemaakt is door de tegenpartij, krijgt de serverende partij een punt en blijft hij aan de opslag.</p>

<img src="images/spelregels.png" alt="speelveld van badminton" id="img">

<h3 class="center">Nieuwe puntenscore vanaf 2006</h3>
<p class="center">Sinds 1 februari 2006 werd er geëxperimenteerd met een nieuwe puntentelling om het spel aantrekkelijker te maken voor het publiek. In de lente van 2006 werd besloten het nieuwe rally-point-systeem officieel in te voeren vanaf het badmintonseizoen dat begon in augustus 2006. Voorheen kon men alleen punten maken op de eigen service en was er een onderscheid tussen dames en heren (damestelling tot en met 11 punten, herentelling tot en met 15 punten). In de nieuwe puntentelling wordt dit onderscheid niet meer gemaakt; dames en heren zijn gelijkwaardig. De telling gaat voor beide seksen tot en met 21 punten per game;</p>
<p class="center">Staan beide spelers op 20 punten dan moet er met twee punten verschil worden gewonnen. Echter, staan beide spelers op 29 punten, dan zal het eerstvolgende punt beslissend zijn voor de winst van de game of wedstrijd. Er wordt nog steeds best of three games gespeeld.</p>
<p class="center">Grote evenementen werden al volgens het nieuwe systeem gespeeld in het seizoen 2005-2006, bijvoorbeeld de Dutch open (winnares Mia Audina vertelde dat dit nieuwe systeem erg zwaar is, vooral voor de mentale gesteldheid).</p>

<h3>Fouten</h3>
<p>Badminton kent de volgende fouten:</p>
<ul>
  <li>Een speler slaat de shuttle buiten de lijnen (uit).</li>
  <li>Een speler slaat de shuttle in het net.</li>
  <li>Een speler raakt de shuttle meer dan één keer (echter geen fout als de shuttle in 1 slag zowel met het blad als met de bespanning wordt geraakt).</li>
  <li>Een speler raakt de shuttle met zijn lichaam wanneer de shuttle in het spel is.</li>
  <li>Een speler raakt het net aan, voor de shuttle op de grond gevallen is (behalve als de tegenstander de shuttle aan zijn kant tegen het net heeft geslagen en aan zijn kant naar beneden valt).</li>
  <li>Een speler slaat de shuttle terug voor die boven het eigen veld is.</li>
  <li>De serveerder of ontvanger staat op een lijn bij het serveren (voetfout).</li>
  <li>Een speler slaat de service in het verkeerde vak.</li>
  <li>Een speler serveert onreglementair:</li>
  <li>Een speler serveert en de shuttle bevindt zich op het moment van raken niet geheel onder het middel. Onder het middel betekent hier: onder de onderste rib.</li>
  <li>Een speler serveert en tijdens het raken van de shuttle dient de steel van het racket enigszins naar beneden te wijzen, horizontaal mag niet.</li>
  <li>Een speler serveert en schuift met zijn voet of laat met zijn voet de grond los voordat hij/zij de shuttle raakt.</li>
  <li>Een speler die klaarstaat om de service te ontvangen, schuift met de voet of laat met de voet de grond los voordat de serveerder de shuttle heeft geraakt.</li>
  <li>De shuttle raakt tijdens een rally niet tot het speelveld behorende objecten (plafond, palen links/rechts van het speelveld).</li>
  <li>Een speler slaat tegen het net met zijn/haar racket op het moment dat de shuttle in het spel is.</li>
</ul>

<h3>Let</h3>
<p>Een scheidsrechter kan tijdens of als de rally afgelopen is, besluiten een let te spelen, dit betekent dat de puntentelling van voor de rally gehandhaafd blijft en dat de rally opnieuw gespeeld wordt.</p>
<p>Er wordt een let gespeeld bij de onderstaande situaties:</p>
<ul>
  <li>De scheidsrechter kan niet goed beoordelen of de shuttle binnen of buiten de lijnen valt.</li>
  <li>Het niet zeker was of de ontvangende partij klaarstond om te beginnen aan de volgende rally. Echter, wanneer de ontvangende partij een poging heeft gedaan een service terug te slaan (ook al is het een reflex) wordt de ontvanger geacht klaar te hebben gestaan en is het punt voor de serveerder.</li>
  <li>De shuttle rolt over het net en valt langs het net naar beneden en belandt op de speelhelft van de speler die de shuttle het laatst heeft geslagen.</li>
  <li>Naar de mening van de scheidsrechter verstoort een coach het spel.</li>
</ul> -->

<?php
  $con = dbConnect();
  $sql = "SELECT * FROM page WHERE page=2";
  $statement = $con->query($sql);
  foreach ($statement as $rij) {
    echo $rij['tekst'];
  }
?>
