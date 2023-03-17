<?php
require_once 'entities/Db.php';
session_start();

$benutzername = $_POST['benutzername'];
$passwort = $_POST['passwort'];
$passwort_ok = $_POST['passwort_ok'];

$db = DB::getDB();

$stmt = "INSERT INTO person (name, passwort) VALUES ('$benutzername','$passwort')";
if($passwort != $passwort_ok){
    header('Location: ../register.php?error=1');
    } else {
        $result = $db->query($stmt);       
            header('Location: ../login.php');     
     }



//hallo

?>