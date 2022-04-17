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
        <link rel="stylesheet" href="../styles/resultaat.css">
        <script src="" defer></script>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="bodyresultaat">
    <?php
    include "Includes/header.php"
    ?>
    <br>
        <?php
        $totalScore = ["0","40","80","120","160","200","240","280","320","360","400","440","480","520","560","600"];


        for($counter = 0; $counter < 15; $counter++)
        {
        }
        ?>
        <div id="resultaatdoos">
            <p id="volledigeNaam">
                Hallo <?php echo ($_POST['firstname']); ?> <?php echo ($_POST['lastname']);?>,
                <br>
                Hier zijn de resulaten van de enquete die u zojuist heeft ingevuld:
            </p>

            <p id="resultaten">
                <?php
                    $jouwScore = $_POST['question1'] + $_POST['question2'] + $_POST['question3'] + $_POST['question4'] + $_POST['question5'] + $_POST['question6'] + $_POST['question7'] + $_POST['question8'] + $_POST['question9'] + $_POST['question10'] + $_POST['question11'] + $_POST['question12'] + $_POST['question13'] + $_POST['question14'] + $_POST['question15'];

                    echo "Minium aantal punten: $totalScore[0] <br>";
                    echo "Maximaal aantal punten: $totalScore[15] <br> <br>";
                    echo "Jouw aantal punten: $jouwScore";
                ?>
            </p>

            <p id="advies">
                <?php
                if ($jouwScore > 399) {
                    echo "Expert System and Devices";
                    echo '<img src="../images/systeembeheer.jpg" alt="test1" class="resultaatimg"/>';
                }

                else if ($jouwScore >199 == $jouwScore <399) {
                    echo "Allround Medewerker System and Devices";
                    echo '<img src="../images/buildingcomputer.jpg" alt="test1" class="resultaatimg"/>';
                }

                else if ($jouwScore <199) {
                    echo "Software Developer";
                    echo '<img src="../images/coding.png" alt="test1" class="resultaatimg"/>';
                }
                ?>
            </p>
        </div>
    <?php
    include "Includes/footer.php"
    ?>
    </body>
</html>