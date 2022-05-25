<?php

if($_POST['voornaam'] == "") {
    echo "Je hebt nog geen naam ingevuld.<br>";
    echo "<a href=\"formulier.html\">Terug naar inlog<br></a>"; 
} else{
    echo($_POST['voornaam']);
    echo "<br>";}

if($_POST['adres'] == "") {
    echo "Je hebt nog geen adres ingevuld.<br>";
    echo "<a href=\"formulier.html\">Terug naar inlog<br></a>";
} else{
    echo($_POST['adres']);
    echo "<br>";}

if($_POST['email'] == "") {
    echo "Je hebt nog geen email ingevuld.<br>";
    echo "<a href=\"formulier.html\">Terug naar inlog<br></a>";
} else{
    echo($_POST['email']);
    echo "<br>";}

if($_POST['wachtwoord'] == "") {
    echo "Je hebt nog geen wachtwoord ingevuld.<br>";
    echo "<a href=\"formulier.html\">Terug naar inlog<br></a>";
} else echo($_POST['wachtwoord']);