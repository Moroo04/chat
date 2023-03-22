<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formular</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tenor Sans" />
</head>

<body>
    <div class="register-wrapper">
        <div class="content-register">
            <form action="index.php?aktion=benutzerHinzufuegen&controller=ajax" method="post">

                <h1 class="noselect">Willkommen.</h1>
                <p>
                    <input class="feldr" type="text" name="benutzername" placeholder="Benutzername" required />
                </p>
                <p>
                    <input class="feldr" type="password" name="passwort" placeholder="Passwort" required />
                </p>
                <p>
                    <input class="feldr" type="password" name="passwort_ok" placeholder="Passwort bestätigen"
                        required />
                </p>
                <a id="registrieren" href="index.php?aktion=login">Login</a>
                <p>
                    <input id="anmelden" type="submit" value="Registrieren" />
                </p>

            </form>
            <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
                <p style="color: red; font-family: Tenor Sans, sans-serif; font-size: 16px; font-weight: bold;">Passwörter
                    stimmen nicht überein
                </p>
            <?php } ?>
        </div>
    </div>

</body>

</html>