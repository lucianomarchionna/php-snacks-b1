<?php
$getName = $_GET["name"];
$getMail = $_GET["mail"];
$getAge = $_GET["age"];

if(empty($getName) || empty($getMail) || empty($getAge)){
    echo "<h2>" . "Uno dei campi da inserire è vuoto, riprovare!";
} 

else {
    if(strlen($getName) > 3 && strpos($getMail, "@") !== false && strpos($getMail, ".") !== false && is_numeric($getAge)){
        echo "<h2>" . "Accesso riuscito";
    }
    else{
        echo "<h2>" . "Accesso negato";
    }
}
echo "<h4>" . "Queste sono le tue credenziali:" . "<br>" . "Nome:" . " " . $_GET["name"] . "<br>" . "Mail:" . " "  . $_GET["mail"] . "<br>" . "Anni:" . " " . $_GET["age"];

?>