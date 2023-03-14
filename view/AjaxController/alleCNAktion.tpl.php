<!DOCTYPE html>
<html>

<head>
    <title>Chat-Oberfläche</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat.css" />
</head>

<body>

    <div id="chat">
        <p id="benutzer">Benutzer:
            <?php echo $_SESSION['eingeloggt'] ?>
        </p>
        <div id="chatlog">
            <table>
                <?php foreach ($nachrichten as $nachricht) { ?>
                    <tr>
                        <td>
                            <?= $nachricht->getPerson()->getName() . ': ' . $nachricht->getText() ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <div id="input">
            <input id="unique_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
            <input type="text" id="message-input" placeholder="Nachricht eingeben...">
        </div>
    </div>
      
    <script src="javascript/sendMessage.js"></script>
    <script src="javascript/getMessage.js"></script>

</body>

</html>