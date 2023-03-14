<?php

class Nachricht {
    use ActiveRecordable, Findable, Persistable;

    private int $id = 0;
    private string $text = '';
    private int $person_id = 0;
    
    public function getId(): int {
        return $this->id;
    }

    public function getText(): string {
        return $this->text;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setText(string $text): void {
        $this->text = $text;
    }

    public function setPerson_id(int $id) {
        $this->person_id = $id;
    }

    public function setPerson(Person $person) {
        $this->person_id = $person->getId();
    }

    public function getPerson() {
        return Person::finde($this->person_id);
    }

    public static function findeNachPerson(Person $person) {
        $sql = 'SELECT text FROM nachricht WHERE benutzer_id=?';
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array($person->getId()));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Nachricht');
        return $abfrage->fetchAll();
    }
    

}
