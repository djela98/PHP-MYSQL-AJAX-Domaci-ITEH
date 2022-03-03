$(function () {
    pretrazi();
    sortiraj();
});

function pretrazi() {

    $(document).on('click', '#btn_pretraga', function () {

        var kljuc = $('#input_pretraga').val();

        $.ajax(
            {
                url: 'pretragaStudenata.php',
                method: 'post',
                data: { KLJUC: kljuc },

                success: function (odg) {
                    {
                        $(".tabela").html(odg);
                    }
                }
            }
        )
    })
}



function sortiraj() {

    $(document).on('click', '#btn_sortiranje', function () {

        let kolona = $('#k_sort').val();
        let sort = $('#s_sort').val();

        $.ajax(
            {
                url: 'sortiranjeStudenata.php',
                method: 'post',
                data: { KOLONA: kolona, SORT: sort },

                success: function (odg) {
                    {
                        $(".tabela").html(odg);
                    }
                }
            }
        )
    })

}
