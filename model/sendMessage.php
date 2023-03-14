<?php

session_start();
if (isset($_SESSION['unique_id'])) {
    require_once 'entities/Db.php';
    // SQL-Statement vorbereiten
    $stmt = DB::getDB()->prepare("INSERT INTO nachricht (text, person_id) VALUES (:message, :person_id)");
    // Parameter binden
    $stmt->bindParam(':message', $_POST['message']);
    $stmt->bindParam(':person_id', $_SESSION['unique_id']);
    // Statement ausführen
    $stmt->execute();
    // Verbindung schließen
    $db = null;

}


?>