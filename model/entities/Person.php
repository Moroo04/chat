<?php

class Person{
    use ActiveRecordable, Findable, Persistable;

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

    public static function getTable()
    {
        return self::$table;
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

    public static function setTable($table): void
    {
        self::$table = $table;
    }


}