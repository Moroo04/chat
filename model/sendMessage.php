<?php
require_once 'entities/Db.php';


if (isset($_POST['text']) && isset($_POST['id']) && !empty($_POST['text']) && !empty($_POST['id'])) {

    // Text- und Benutzerparameter abrufen und bereinigen
    $text = trim($_POST['text']);
    $id = trim($_POST['id']);

    // SQL-Query vorbereiten und ausführen, um Text und Benutzer in Tabelle "nachricht" einzufügen
    $query = $db->prepare("INSERT INTO nachricht (text, person_id) VALUES (:text, :person_id)");
    $query->execute(array(":text" => $text, ":person_id" => $id));

    // Erfolgsmeldung ausgeben
    echo "Nachricht erfolgreich gesendet!";
    header('Location: ../login.php?error=1');
} else {
    // Fehlermeldung ausgeben, falls Text- oder Benutzerparameter nicht gesetzt oder leer sind
    echo "Fehler: Text oder Benutzer nicht angegeben.";
    
}


?>