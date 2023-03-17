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
    <meta charset="utf-8" />
    <title>Formular</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tenor Sans" />
</head>

<body>
    <div class="content">
        <form action="model/registrieren.php" method="post">

            <h1>Willkommen.</h1>
            <p>
                <input class="feldr" type="text" name="benutzername" placeholder="Benutzername" required />
            </p>
            <p>
                <input class="feldr" type="password" name="passwort" placeholder="Passwort" required />
            </p>
            <p>
                <input class="feldr" type="password" name="passwort_ok" placeholder="Passwort bestätigen" required />
            </p>
            <a id="registrieren" href="login.php">Login</a>
            <p>
                <input id="anmelden" type="submit" value="Registrieren" />
            </p>

        </form>
        <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
            <p style="color: red; font-family: Tenor Sans, sans-serif; font-size: 16px; font-weight: bold;">Passwörter stimmen nicht überein
            </p>
        <?php } ?>
    </div>


</body>

</html>