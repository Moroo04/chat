
// Funktion, die die Eingabe speichert und an die PHP-Datei sendet
function saveMessage() {
    // Inhalt des Input-Feldes erfassen
    let message = document.getElementById("message-input").value;

    // Prüfen, ob das Input-Feld leer ist
    if (message.trim() === "") {
        return;
    }

    // AJAX-Anfrage erstellen
    let xhr = new XMLHttpRequest();

    // Daten für die Anfrage vorbereiten
    let data = new FormData();
    data.append('message', message);
    console.log(data);
    // Anfrage senden
    xhr.open("POST", "model/sendMessage.php");
    xhr.send(data);
    document.getElementById("message-input").value = "";
    
}

// Event-Listener hinzufügen, um zu prüfen, ob die Enter-Taste gedrückt wurde
document.getElementById("message-input").addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        saveMessage();
        event.preventDefault();
    }
});
