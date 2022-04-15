<!doctype html>
<?php
/**
 * User: Sep de Graaff, Lars van Iersel, Sven van Gasteren
 * Date: 15-4-2022
 * File: resultaat.php
 */
?>

<html lang="en">
<head>
    <title>
        Resultaten!
    </title>
    <!-- link naar CSS bestand -->
    <link rel="stylesheet" href="./styles/resultaat.css">
    <script src="" defer></script>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <p id="volledigeNaam">
        Hallo, <?php echo ($_POST['firstname']); ?> <?php echo ($_POST['lastname']); ?>
        <br>
        Hier zijn uw resulaten van de enquete die u net heeft ingevuld:
    </p>

    <p id="resultaten">
        
    </p>
</body>
</html>