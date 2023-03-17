<?php
require_once 'entities/Db.php';
session_start();

$benutzername = $_POST['benutzername'];
$passwort = $_POST['passwort'];
$passwort_ok = $_POST['passwort_ok'];

if($passwort != $passwort_ok){
    header('Location: ../register.php?error=1');
    } else {
            header("Location: ../index.php?aktion=benutzerHinzufuegen&controller=ajax&name=$benutzername&passwort=$passwort");     
     }







?>