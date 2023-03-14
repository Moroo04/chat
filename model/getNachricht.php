<?php 
require_once 'entities/Db.php';
$db = DB::getDB();

$sql = "SELECT nachricht.text, person.name FROM nachricht
INNER JOIN person ON nachricht.person_id = person.id";
$stmt = $db->query($sql);

// Daten als JSON zurückgeben
$messages = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
$message = array('name' => $row['name'], 'text' => $row['text']);
array_push($messages, $message);
}
echo json_encode($messages);

// Verbindung zur Datenbank schließen
$conn = null;

?>