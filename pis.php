<?php
include 'header.php'
?>

<body>

    <div class="pis">

        <div class="pretraga">
            <h3>Pretraga</h3>
            <input type="text" class="form-control" id="input_pretraga" placeholder="Unesite ime i prezime studenta, JMBG ili broj indeksa...">
            <button type="button" class="btn btn-primary" id="btn_pretraga">Pretrazi</button>
        </div>




        <div class="sortiranje">
            <h3 id="kol">Kolona: </h3>
            <select class="form-select" id="k_sort">
                <option>Izaberi</option>
                <option value="ime_prezime">Ime i Prezime</option>
                <option value="broj_indeksa">Broj indeksa</option>
            </select>

            <h3>Sort: </h3>
            <select class="form-select" id="s_sort">
                <option>Izaberi</option>
                <option value="asc">Rastuce</option>
                <option value="desc">Opadajuce</option>
            </select>
            <button type="button" class="btn btn-primary" id="btn_sortiranje">Sortiraj</button>
        </div>
    </div>


    <div class="tabela">

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>

</html>