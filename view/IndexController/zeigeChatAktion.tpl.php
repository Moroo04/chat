<!DOCTYPE html>
<html>

<head>
    <title>Chat-Oberfläche</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/chat.css" />


</head>

<body>
    <div id="chat_wrapper">
        <div id="chat">
            <a href="index.php" title="Ausloggen">
                <i class="fa fa-sign-out" style="font-size:60px"></i>
            </a>
            <a href="index.php?aktion=nachrichtenLeeren&controller=ajax" title="Nachrichten leeren">
                <i class="glyphicon glyphicon-trash" style="font-size:36px"></i>
            </a>
            <p id="benutzer">Benutzer:
                <?php echo $_SESSION['eingeloggt'] ?>
            </p>

            <div id="chatlog">

            </div>
            <form action="#" class="typing-area">
                <div id="input">

                    <input type="text" id="message-input" name="message" placeholder="Nachricht eingeben...">
                </div>
            </form>
        </div>
    </div>

    <script src="javascript/sendMessage.js"></script>
    <script src="javascript/getMessage.js"></script>


</body>

</html>