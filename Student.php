<?php

class Student
{
    public $id;
    public $imePrezime;
    public $jmbg;
    public $brojIndeksa;
    public $fakultet_id;

    public function dodajStudenta($imePrezime, $jmbg, $brojIndeksa, $fakultet_id, $db)
    {
        $db = new DB('studenti');
        $upit = "insert into student (ime_prezime, jmbg, broj_indeksa, fakultet_id) values ('$imePrezime', '$jmbg', '$brojIndeksa', '$fakultet_id')";
        return $db->connection->query($upit);
    }
}
