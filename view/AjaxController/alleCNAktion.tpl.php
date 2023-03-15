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
                <?php foreach (array_slice($nachrichten, -20) as $nachricht) { ?>
                    <tr>
                        <td>
                            <?= $nachricht->getPerson()->getName() . ': ' . $nachricht->getText() ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <form action="#" class="typing-area">
            <div id="input">

                <input type="text" id="message-input" name="message" placeholder="Nachricht eingeben...">
            </div>
        </form>
    </div>

    <script src="javascript/sendMessage.js"></script>
    <script src="javascript/getMessage.js"></script>


</body>

</html>