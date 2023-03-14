<?php

class IndexController extends AbstractBase{

// Alle Seminartermine auslesen
    public function alleSTAktion(){
      $this->addContext("seminartermine", Seminartermin::findeAlle());
    }

}

