<?php
include 'header.php';
include 'DB.php';
$db = new DB('studenti');
?>

<body>
    <div class="forma">
        <form method="post" class="text-center">
            <div class="mb-2">
                <label class="form-label">Ime i prezime: </label>
                <input type="text" class="form-control" name="ime_prezime">
            </div>
            <div class="mb-2">
                <label class="form-label">JMBG: </label>
                <input type="number" class="form-control" name="jmbg">
            </div>
            <div class="mb-2">
                <label class="form-label">Broj indeksa: </label>
                <input type="text" class="form-control" name="broj_indeksa">
            </div>

            <div class="mb-3">
                <label class="form-label">Fakultet: </label>
                <select class="form-select" name="fakultet">
                    <?php
                    $upit1 = "select id,naziv from fakultet";
                    $data1 = $db->connection->query($upit1);

                    while ($red = mysqli_fetch_array($data1)) :
                    ?>
                        <option class="text-center" value="<?php echo $red['id']; ?>"><?php echo $red['naziv']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Univerzitet: </label>
                <select class="form-select" name="univerzitet">
                    <?php
                    $upit2 = "select id,grad from univerzitet";
                    $data2 = $db->connection->query($upit2);

                    while ($red = mysqli_fetch_array($data2)) :
                    ?>
                        <option class="text-center" value="<?php echo $red['id']; ?>"><?php echo $red['grad']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <button type="submit" name="dodaj_button" class="btn btn-primary" id="dodaj_dugme">Dodaj studenta</button>
        </form>
    </div>


    <?php

    include('Student.php');

    if (isset($_POST['dodaj_button'])) {
        $student = new Student();
        if ($student->dodajStudenta($_POST['ime_prezime'], $_POST['jmbg'], $_POST['broj_indeksa'], $_POST['fakultet'], $_POST['univerzitet'])) {
            header('Location: crud.php');
        }
    }

    ?>

</body>

</html>