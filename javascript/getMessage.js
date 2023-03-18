
setInterval(function () {
  
  // AJAX-Aufruf an "chat.php"
  let xhr = new XMLHttpRequest();

  xhr.open('GET', 'index.php?aktion=alleNachrichten&controller=ajax');


  xhr.onload = function () {
    if (xhr.status === 200) {
      // Antwort erfolgreich erhalten
      let responseText = xhr.responseText;
      let parser = new DOMParser();
      let newDoc = parser.parseFromString(responseText, "text/html");
      
     
      // Aktualisiere die aktuelle Seite mit dem neuen Inhalt
      document.getElementById('chatlog').innerHTML = newDoc.querySelector('#Nachrichten').innerHTML;
      
      
    } else {
      // Fehler bei der Antwort
      console.log('Fehler bei der Antwort: ' + xhr.status);
    }
  };
  
  xhr.send();
  
}, 200);
