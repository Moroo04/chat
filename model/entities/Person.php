<?php

class Person
{
    use ActiveRecordable, Findable, Persistable, Deletable;

    private int $id = 0;
    private string $name = '';
    private string $passwort = '';

    protected static $table = 'person';

    public function __toString()
    {
        return $this->getName();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPasswort(): string
    {
        return $this->passwort;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPasswort(string $passwort): void
    {
        $this->passwort = $passwort;
    }

   

    public static function getPersonNamePasswort($name, $passwort)
    {
        $stmt = "SELECT * FROM person WHERE name LIKE '$name' AND passwort LIKE '$passwort'";
        $result = DB::getDB()->query($stmt);
        $result = $result->fetchAll();

        return $result;
    }

}