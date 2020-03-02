<?php
/**
 * User: milad
 * Date: 2-3-2020
 * Time: 11:55
 * File: script.php
 */
?>
    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <title>

        </title>

        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta charset="utf-8">
        <link href="../../CSS/style.css" type="text/css" rel="stylesheet">

    </head>
    <body>
    <h2>Uitwerking van <a href="../Index.php"> PHP-opdrachten</a></h2>
    <div class="box">
        <?php
        /**
         * Nederlands = Ende, Jan-Chris van den
         * Engels = Giesen, Jan
         * PHP = Saebu, Abu
         * JavaScript = Evers, Remco
         * ASP = Meer, Martijn van
         * Modeleren = Bijnen, Wim van
         * Database SQL = Wetering, Martijn van de
         * Digitale vaardigheden gevorderd = Pielage, Larissa
         * Rekenen = Wetering, Martijn van de
         * Loopbaan & Burgerschap = Ruiter, Paula de
         * Computertekenen = Berg, Pieter van den
         */


        $courseName = 'Nederlands';
        $teacherName = '';

        switch($courseName){
            case "Nederlands":
                $teacherName = 'Ende, Jan-Chris van den';
                break;
            case "Engels":
                $teacherName = 'Giesen, Jan';
                break;
            case "PHP":
                $teacherName = 'Saebu, Abu';
                break;
            case "JavaScript":
                $teacherName = 'Evers, Remco';
                break;
            case "ASP":
                $teacherName = 'Meer, Martijn van';
                break;
            case "Modeleren":
                $teacherName = 'Bijnen, Wim van';
                break;
            case "Database SQL":
                $teacherName = 'Wetering, Martijn van de';
                break;
            case "Digitale vaardigheden gevorderd":
                $teacherName = 'Pielage, Larissa';
                break;
            case "Rekenen":
                $teacherName = 'Wetering, Martijn van de';
                break;
            case "Loopbaan & Burgerschap":
                $teacherName = 'Ruiter, Paula de';
                break;
            case "Computertekenen":
                $teacherName = 'Berg, Pieter van den';
                break;
        }

        echo '<p>Voor het vak <b>'.$courseName.'</b> heb je <b>'.$teacherName.'</b> als docent.';
        ?>
    </div>
    </body>
    </html>