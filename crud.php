<?php
include 'header.php'
?>

<body>

    <div class="table">

        <table class="table table-bordered">
            <thead class="table-info text-center">
                <tr>
                    <th>ID</th>
                    <th>Ime i Prezime</th>
                    <th>JMBG</th>
                    <th>Broj indeksa</th>
                    <th>Fakultet</th>
                    <th>Univerzitet</th>
                    <th>CRUD</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php

                include('DB.php');
                $db = new DB('studenti');
                $upit = "select s.id, s.ime_prezime, s.jmbg, s.broj_indeksa, f.naziv, u.grad from student s join fakultet f on s.fakultet_id=f.id join univerzitet u on f.univerzitet_id=u.id";
                $data = $db->connection->query($upit);

                while ($red = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $red['id'] ?></td>
                        <td><?php echo $red['ime_prezime'] ?></td>
                        <td><?php echo $red['jmbg'] ?></td>
                        <td><?php echo $red['broj_indeksa'] ?></td>
                        <td><?php echo $red['naziv'] ?></td>
                        <td><?php echo $red['grad'] ?></td>
                        <td>
                            <button type="button" class="btn btn-primary">Izmena</button>
                            <button type="button" class="btn btn-danger">Obriši</button>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>