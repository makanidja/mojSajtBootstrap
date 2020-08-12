<?php 

    $username = "Danilo";

    function displayMessage($name){
        echo "Helloooo $name </br>";
    }

    function sabiranje($num1=0, $num2=0){
        echo $num1 + $num2."</br>";
    }

    function displayName(){
        global $username;
        echo $username;
        return "Funkcija zavrsena!";
    }

    displayMessage("Maka");
    displayMessage("Makica");

    sabiranje(10, 20);
    sabiranje(15);

    $rezultat_funkcije = displayName();

    echo $rezultat_funkcije;
?>