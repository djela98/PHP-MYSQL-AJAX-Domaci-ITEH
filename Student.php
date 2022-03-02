<?php

class Student
{
    public $id;
    public $imePrezime;
    public $jmbg;
    public $brojIndeksa;
    public $fakultet_id;

    public function dodajStudenta($imePrezime, $jmbg, $brojIndeksa, $fakultet_id, $univerzitet_id)
    {
        $db = new DB('studenti');
        $upit = "insert into student (ime_prezime, jmbg, broj_indeksa, fakultet_id, univerzitet_id) values ('$imePrezime', '$jmbg', '$brojIndeksa', '$fakultet_id', '$univerzitet_id')";
        return $db->connection->query($upit);
    }

    public function izmeniStudenta($imePrezime, $jmbg, $brojIndeksa, $fakultet_id, $univerzitet_id, $id)
    {
        $db = new DB('studenti');
        $upit = "update student set ime_prezime='" . $imePrezime . "', jmbg='" . $jmbg . "',
        broj_indeksa='" . $brojIndeksa . "', fakultet_id='" . $fakultet_id . "', univerzitet_id='" . $univerzitet_id . "' where id=" . $id;

        return $db->connection->query($upit);
    }
}
