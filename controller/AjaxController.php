<?php

session_start();

class AjaxController extends AbstractBase
{

  // Alle Chatnachrichten auslesen
  public function alleNachrichtenAktion()
  {
    $this->addContext("nachrichten", Nachricht::findeAlle());
  }

  public function nachrichtenLeerenAktion()
  {
    Nachricht::tabelleLeeren();
    header('Location: index.php?aktion=zeigeChat');
  }

  public function ueberpreuefeLoginAktion()
  {

    $person = Person::getPersonNamePasswort($_POST['benutzername'], $_POST['passwort']);
    if ($person) {
      $_SESSION['unique_id'] = $person[0]['id'];
      $_SESSION['eingeloggt'] = $_POST['benutzername'];
      header('Location: index.php?aktion=zeigeChat');
    } else {
      header('Location: index.php?error=1');
    }
  }

  public function benutzerHinzufuegenAktion()
  {
    $name = $_POST['benutzername'];
    $passwort = $_POST['passwort'];
    $passwort_ok = $_POST['passwort_ok'];

    if ($passwort != $passwort_ok) {
      header('Location: index.php?aktion=register&error=1');
    } else {
      $person = new Person();
      $person->__construct(["name" => "$name", "passwort" => "$passwort"]);
      $person->speichere();
      header("Location: index.php?aktion=login");
    }

  }

  public function nachrichtHinzufuegenAktion()
  {
    $text = $_POST['message'];
    $id = $_SESSION['unique_id'];
    $nachricht = new Nachricht();
    $nachricht->__construct(["text" => "$text", "person_id" => "$id"]);
    $nachricht->speichere();
    header("Location: index.php?aktion=zeigeChat");
  }


}