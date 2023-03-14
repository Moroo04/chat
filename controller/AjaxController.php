<?php

class AjaxController extends AbstractBase
{

  // Alle Chatnachrichten auslesen
  public function alleCNAktion()
  {
    $this->addContext("nachrichten", Nachricht::findeAlle());
  }

  
}