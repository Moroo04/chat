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
        <form action="model/einloggen.php" method="post">

            <h1>Willkommen.</h1>
            <p>
                <input class="feld" type="text" name="benutzername" placeholder="Benutzername" required />
            </p>
            <p>
                <input class="feld" type="password" name="passwort" placeholder="Passwort" required />
            </p>
            <p>
                <input id="anmelden" type="submit" value="Anmelden" />
            </p>

        </form>
        <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
            <p style="color: red; font-family: Tenor Sans, sans-serif; font-size: 16px; font-weight: bold;">Benutzername oder Passwort falsch
            </p>
        <?php } ?>
    </div>


</body>

</html>