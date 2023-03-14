<?php
require_once 'entities/Db.php';
session_start();

$benutzername = $_POST['benutzername'];
$passwort = $_POST['passwort'];

$db = DB::getDB();

$stmt = "SELECT * FROM person WHERE name LIKE '$benutzername' AND passwort LIKE '$passwort'";
$result = $db->query($stmt);
$result = $result->fetchAll();

if ($result) {
    $_SESSION['eingeloggt'] = $benutzername;
    header('Location: ../chat.php');
}else{
    header('Location: ../login.php?error=1');
}


?>