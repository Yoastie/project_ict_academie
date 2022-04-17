<?php
/**
 * User: Sep de Graaff, Lars van Iersel, Sven van Gasteren
 * Date: 5-4-2022
 * File: Index.php
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
    </head>
    <body>
        <?php
            include "Includes/header.php"
        ?>
        <main>
            <div>
                <img src="/images/ICT%20academie%20achtegrond.jpg" alt="Achtergrond">
            </div>
            <h2>
                Wil jij weten welke opleiding het beste bij jou past?
            </h2>
            <?php

                date_default_timezone_set('Europe/Amsterdam');

                $Hour = date('H');

                if ($Hour >= 5 && $Hour <= 11)
                {
                    echo "<h1 class='echoCSS'> Goede Morgen.</h1>";
                }
                else if ($Hour >= 12 && $Hour <= 18)
                {
                    echo "<h1 class='echoCSS'> Goede Middag.</h1>";
                }
                else if ($Hour >= 19 || $Hour <= 4)
                {
                    echo "<h1 class='echoCSS'> Goede Avond.</h1>";
                }
            ?>
            <p>
                Hier naast staat een knop die je naar een formulier brengt waar je dit kan uitvinden! <br>
                Het formulier gaat vragen stellen en daarna met een complex algoritme bepalen voor welke opleiding jij het meest geschikt bent. <br>
                bereid je maar voor!
            </p>
            <a href="/Pages/vragen.php"><button id="formulierPageknop">Formulier</button></a>
        </main>
        <?php
            include "Includes/Footer.php"
        ?>
    </body>
</html>


