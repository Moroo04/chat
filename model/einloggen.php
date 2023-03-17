<?php
require_once 'entities/Db.php';
session_start();

$benutzername = $_POST['benutzername'];
$passwort = $_POST['passwort'];

header("Location: ../index.php?aktion=ueberpreuefeLogin&controller=ajax&name=$benutzername&passwort=$passwort");

?>