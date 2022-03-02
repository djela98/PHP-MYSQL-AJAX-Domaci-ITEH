 <?php

    include 'DB.php';
    $db = new DB('studenti');

    $upit = "delete from student where id=" . $_GET['id_studenta'];

    if ($db->connection->query($upit)) {
        header('Location: crud.php');
    }
