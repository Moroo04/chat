const messageInput = document.getElementById('message-input');
const unique_id = document.getElementById('unique_id').value;
const chatLog = document.getElementById('chatlog');

function sendMessage() {
    const message = messageInput.value;
    if (message.trim() === '') return; // verhindert das Senden leerer Nachrichten

    var xhttp = new XMLHttpRequest();
    var url = "model/sendMessage.php?id=" + unique_id + "&text=" + message ; // Hier werden die Parameter erstellt

    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log('Nachricht gesendet');
        }
    };
    xhttp.send();

    messageInput.value = '';
}

messageInput.addEventListener('keyup', function (event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
});

