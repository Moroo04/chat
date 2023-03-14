function loadMessages() {
    // AJAX-Anfrage an den Server senden
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'getNachricht.php');
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Antwort als JSON-Objekt parsen
        var messages = JSON.parse(xhr.responseText);
        
        // Chat-Log-Element auswählen
        var chatlog = document.getElementById('chatlog');
        
        // Nachrichten in Chat-Log einfügen
        for (var i = 0; i < messages.length; i++) {
          var message = messages[i];
          var text = message.text;
          var name = message.name;
          var html = '<div class="message">' + '<span class="name">' + name + '</span>' + '<span class="text">' + text + '</span>' + '</div>';
          chatlog.innerHTML += html;
        }
        
        // Scrollen zum Ende des Chat-Logs
        chatlog.scrollTop = chatlog.scrollHeight;
      }
    };
    xhr.send();
  }
  
  // Funktion zum Senden der Nachricht
  function sendMessage() {
    // Code zum Senden der Nachricht...
  }
  