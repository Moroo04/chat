<?php

session_start();

class AjaxController extends AbstractBase
{

  // Alle Chatnachrichten auslesen
  public function alleNachrichtenAktion()
  {
    $this->addContext("nachrichten", Nachricht::findeAlle());
  }

  public function nachrichtenLeerenAktion(){
    Nachricht::tabelleLeeren();
    header('Location: index.php?aktion=zeigeChat');
  }

  public function ueberpreuefeLoginAktion()
  {

    $person = Person::getPersonNamePasswort($_GET['name'], $_GET['passwort']);
    if ($person) {
      $_SESSION['unique_id'] = $person[0]['id'];
      $_SESSION['eingeloggt'] = $_GET['name'];
      header('Location: index.php?aktion=zeigeChat');
    } else {
      header('Location: index.php?error=1');
    }
  }

  public function benutzerHinzufuegenAktion()
  {
    $name = $_GET['name'];
    $passwort = $_GET['passwort'];
    $person = new Person();
    $person->__construct(["name" => "$name", "passwort" => "$passwort"]);
    $person->speichere();
    header("Location: index.php?aktion=login");
  }

  public function nachrichtHinzufuegenAktion()
  {
    $text = $_GET['message'];
    $id = $_GET['id'];
    $nachricht = new Nachricht();
    $nachricht->__construct(["text" => "$text", "person_id" => "$id"]);
    $nachricht->speichere();
    header("Location: index.php?aktion=zeigeChat");
  }


}