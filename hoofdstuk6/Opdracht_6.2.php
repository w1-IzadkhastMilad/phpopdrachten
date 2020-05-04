<?php
/**
 * User: milad
 * Date: 29-4-2020
 * Time: 13:07
 * File: Opdracht_6.2.php
 */
?>

<?php
include "../Include/header.php"
?>
<form id="gameFrm" method="get" action="Opdracht_6.2.php">
    <div class="float">
        <input type="radio"onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">steen
        <img src="images/steen.jpg">
    </div>
    <div class="float">
        <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">papier
        <img src="images/papier.jpg">
    </div>
    <div class="float">
        <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">schaar
        <img src="images/schaar.jpg">
    </div>
    </form>

<?php
$_SESSION['computer'] = 0;
$_SESSION['player'] = 0;
if (isset($_GET['keuze'])) {
    echo "Jij koos: <img src='../images/{$_GET['keuze']}.jpg'> {$_GET['keuze']} <br>";
    $persoonkeuze = $_GET['keuze'];

    $opties = array("steen","papier","schaar");
    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];
    echo "&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.jpg'> $computerkeuze <br>";



    //schaar wint van papier
    if ($computerkeuze == 'schaar' && $persoonkeuze == 'papier'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'schaar' && $computerkeuze == 'papier'){
        $_SESSION['player'] +=1;
    }
    //steen wint van schaar
    elseif ($computerkeuze == 'steen' && $persoonkeuze == 'schaar'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'steen' && $computerkeuze == 'schaar'){
        $_SESSION['player'] +=1;
    }
    //papier wint van steen
    elseif ($computerkeuze == 'steen' && $persoonkeuze == 'papier'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'steen' && $computerkeuze == 'papier'){
        $_SESSION['player'] +=1;
    }

}

echo 'De stand is: <br>';
echo $_SESSION['computer'] . ' voor de computer <br>';
echo $_SESSION['player'] . ' voor de jou <br>';

if($_SESSION['computer'] = 5){
    echo 'The winner is the computer';
    session_destroy();
}
elseif($_SESSION['player'] = 5){
    echo 'The winner is the player';
    session_destroy();
}


?>



<?php
include "../Include/footer.php"
?>