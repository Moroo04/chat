<?php
require_once 'model/funktionen.inc.php';
spl_autoload_register('autoloadControllers');
spl_autoload_register('autoloadEntities');
spl_autoload_register('autoloadTraits');
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Chat-Oberfläche</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/chat.css" />
</head>

<body onload="loadMessages()">

  <div id="chat">
    <p id="benutzer">Benutzer:
      <?php echo $_SESSION['eingeloggt'] ?>
    </p>
    <div id="chatlog">


    </div>
    <div id="input">

      <input type="text" id="message-input" placeholder="Nachricht eingeben...">
    </div>
  </div>

  <script src="javascript/getMessage.js"></script>
  <script src="javascript/sendMessage.js"></script>

</body>

</html>