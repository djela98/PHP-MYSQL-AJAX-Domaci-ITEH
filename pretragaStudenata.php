<table class="table table-bordered" id="pretraga-rez">
    <thead class="table-dark text-center">
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
        $kljucPretrage = $_POST['KLJUC'];
        $db = new DB('studenti');


        $upit = "select s.id, s.ime_prezime, s.jmbg, s.broj_indeksa, f.naziv, u.grad from student s join fakultet f on s.fakultet_id=f.id join univerzitet u on s.univerzitet_id=u.id where s.ime_prezime like '%" . $kljucPretrage . "%' or jmbg like '%" . $kljucPretrage . "%' or broj_indeksa like '%" . $kljucPretrage . "%'";
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
                    <a href="izmeniStudenta.php?id_studenta=<?php echo $red['id'] ?>"><button type="button" class="btn btn-primary">Izmena</button></a>
                    <a href="obrisiStudenta.php?id_studenta=<?php echo $red['id'] ?>"><button type="button" class="btn btn-danger">Obriši</button></a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>