function scrollToBottom() {
  let chatLog = document.getElementById("chatlog");
  chatLog.scrollTop = chatLog.scrollHeight;
}


setInterval(function () {
  
  // AJAX-Aufruf an "chat.php"
  let xhr = new XMLHttpRequest();
  xhr.open('GET', 'chat.php');
  xhr.onload = function () {
    if (xhr.status === 200) {
      // Antwort erfolgreich erhalten
      let responseText = xhr.responseText;
      let parser = new DOMParser();
      let newDoc = parser.parseFromString(responseText, "text/html");
      let newBody = newDoc.getElementById('chatlog').innerHTML;
      
      // Aktualisiere die aktuelle Seite mit dem neuen Inhalt
      document.getElementById('chatlog').innerHTML = newBody;
      
      
    } else {
      // Fehler bei der Antwort
      console.log('Fehler bei der Antwort: ' + xhr.status);
    }
  };
  
  xhr.send();
  
}, 500);
