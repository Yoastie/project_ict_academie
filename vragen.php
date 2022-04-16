<?php
/**
 * User: Lars van Iersel
 * Date: 15-4-2022
 * File: vragen.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/home.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/vragen.css">
</head>
<body>
<?php
include "Includes/header.php"
?>
<br>
<div id="Formdoos">
    <main>
        <form method="post" action="resultaat.php">
            <p>Voornaam:</p> <input type="text" placeholder="Vul hier je naam in" name="firstname">
            <p>Achternaam:</p> <input type="text" placeholder="Vul hier je achternaam in" name="lastname">

            <!-- value 0 = software,
            value 40 = hardware-->
            <p>Vind je het leuk om moeilijke opdrachten op te lossen?</p>
        <!--    radio voegt de vraag toe aan een groep zoals question1 dan kan je maar 1 ding aanvinken bij question 1-->
            <input type="radio" name="question1" value="0"> ja
            <input type="radio" name="question1" value="40"> nee

            <p>Lijkt het je leuk om te coderen?</p>

            <input type="radio" name="question2" value="0"> ja
            <input type="radio" name="question2" value="40"> nee

            <p>Lijkt het je leuk om computers te bouwen en daar meer over te leren?</p>

            <input type="radio" name="question3" value="0"> ja
            <input type="radio" name="question3" value="40"> nee

            <p>Kan je 8 uur lang achter een computer aan het werk zijn? </p>

            <input type="radio" name="question4" value="0"> ja
            <input type="radio" name="question4" value="40"> nee

            <p>Beheers je al 1 of meerdere codeer talen?</p>

            <input type="radio" name="question5" value="0"> ja
            <input type="radio" name="question5" value="40"> nee

            <p>Heb je al een keer een computer gebouwd?</p>

            <input type="radio" name="question6" value="40"> ja
            <input type="radio" name="question6" value="0"> nee

            <p>Zou je meer over de systemen willen leren waarop computers draaien?</p>

            <input type="radio" name="question7" value="0"> ja
            <input type="radio" name="question7" value="40"> nee

            <p>Ben je iemand die snel afgeleid is?</p>

            <input type="radio" name="question8" value="0"> ja
            <input type="radio" name="question8" value="40"> nee

            <p>vind je het erg om veel te googelen voor school als je iets niet begrijpt?</p>

            <input type="radio" name="question9" value="40"> ja
            <input type="radio" name="question9" value="0"> nee

            <p></p>

            <input type="radio" name="question10" value="0"> ja
            <input type="radio" name="question10" value="40"> nee

            <p></p>

            <input type="radio" name="question11" value="0"> ja
            <input type="radio" name="question11" value="40"> nee

            <p></p>

            <input type="radio" name="question12" value="0"> ja
            <input type="radio" name="question12" value="40"> nee

            <p></p>

            <input type="radio" name="question13" value="0"> ja
            <input type="radio" name="question13" value="40"> nee

            <p></p>

            <input type="radio" name="question14" value="0"> ja
            <input type="radio" name="question14" value="40"> nee

            <p></p>

            <input type="radio" name="question15" value="0"> ja
            <input type="radio" name="question15" value="40"> nee
            <br>
            <br>
        <!--    deze knop zorgt dat je alle data naar de resultaten pagina brengt-->
            <input type="submit" value="Resultaat" id="submitknoppie">
        </form>
    </main>
</div>
<?php
include "Includes/Footer.php"
?>
</body>
</html>


