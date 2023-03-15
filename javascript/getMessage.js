function scrollToBottom() {
  var chatLog = document.getElementById("chatlog");
  chatLog.scrollTop = chatLog.scrollHeight;
}


setInterval(function () {
  
  // AJAX-Aufruf an "chat.php"
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'chat.php');
  xhr.onload = function () {
    if (xhr.status === 200) {
      // Antwort erfolgreich erhalten
      var responseText = xhr.responseText;
      var parser = new DOMParser();
      var newDoc = parser.parseFromString(responseText, "text/html");
      var newBody = newDoc.getElementById('chatlog').innerHTML;
      
      // Aktualisiere die aktuelle Seite mit dem neuen Inhalt
      document.getElementById('chatlog').innerHTML = newBody;
      
      
    } else {
      // Fehler bei der Antwort
      console.log('Fehler bei der Antwort: ' + xhr.status);
    }
  };
  
  xhr.send();
  
}, 500);
