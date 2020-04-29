<?php
/**
 * User: milad
 * Date: 6-4-2020
 * Time: 10:57
 * File: script.php
 */
?>


<?php
$inloggegevens = array("Peter"=>"PeterSon1", "Ben"=>"4towSr", "Joe"=>"DJoZdS", "Marijn"=>"jR9Cvt", "Milad"=>"giFXVD","Bert"=>"lCNFdk","Ali"=>"qm01Fq","Lenny"=>"q5CcaM","Sem"=>"encSNy","Sam"=>"qaKyAF");
$message = "";

$username = $_POST['Username'];
$password = $_POST['Password'];

foreach($inloggegevens as $usernameArray => $passwordArray){
    if($usernameArray == $username && $passwordArray == $password){
        echo "<style>#login{display: none;}#Ingelogt{display: inline-block;}</style>";
    }
    else{
        $message = "<script> color: red;</script> Foutieve username en / of wachtwoord";
    }
}
?>

