<?php
/**
 * User: milad
 * Date: 2-3-2020
 * Time: 11:02
 * File: Oefening_4.1.php
 */
?>

<?php
include "../Include/header.php"
?>

<h1>Oefening 1</h1>
<?php
date_default_timezone_set("Europe/Amsterdam");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd hier in Nederland is: $vandaag";
?>

<h1>Oefening 2</h1>
<?php
date_default_timezone_set("Asia/Tokyo");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd in Japan is nu : $vandaag";
?>

<h1>Oefening 3</h1>
<?php
date_default_timezone_set("America/New_York");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd in New York is nu : $vandaag";
?>

<?php
include "../Include/footer.php"
?>