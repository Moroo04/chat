const messageInput = document.getElementById('message-input');
const sendButton = document.getElementById('send-button');
const chatLog = document.getElementById('chatlog');

function sendMessage() {
    const message = messageInput.value;
    if (message.trim() === '') return; // verhindert das Senden leerer Nachrichten

    const messageElement = document.createElement('div');
    messageElement.innerText = message;
    chatLog.appendChild(messageElement);
    messageInput.value = '';
}

messageInput.addEventListener('keyup', function (event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
});

sendButton.addEventListener('click', sendMessage);