<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formular</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tenor Sans" />
</head>

<body>
    <div class="login-wrapper">
        <div class="content">
            <form action="index.php?aktion=ueberpreuefeLogin&controller=ajax" method="post">

                <h1 class="noselect">Willkommen.</h1>
                <p>
                    <input class="feld" type="text" name="benutzername" placeholder="Benutzername" required />
                </p>
                <p>
                    <input class="feld" type="password" name="passwort" placeholder="Passwort" required />
                </p>
                <a id="registrieren" href="index.php?aktion=register">Registrieren</a>
                <p>
                    <input id="anmelden" type="submit" value="Anmelden" />
                </p>

            </form>
            <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
                <p style="color: red; font-family: Tenor Sans, sans-serif; font-size: 16px; font-weight: bold;">Benutzername
                    oder Passwort falsch
                </p>
            <?php } ?>
        </div>
    </div>


</body>

</html>