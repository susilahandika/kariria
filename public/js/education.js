$(document).ready(function() {

    var table = $('#dataTables-example').DataTable({
            responsive: true,
            "bPaginate": false,
            "searching": false,
            "columnDefs": [
                {
                    "targets": [ 0 ],
                    "visible": false,
                    "searchable": false
                }
            ]
    });

    $('#dataTables-example tbody').on('click', '#bt_ubah', function () {
        var data = table.row( $(this).parents('tr') ).data();

        $('#ed_id').val(data[0]);
        $('#ed_level option[value=' + data[1].replace('<a>', '').replace('</a>', '') + ']').attr('selected','selected');
        $('#ed_education_loc').val(data[2].replace('<a>', '').replace('</a>', ''));
        $('#ed_major').val(data[3].replace('<a>', '').replace('</a>', ''));
        $('#ed_value').val(data[4].replace('<a>', '').replace('</a>', ''));
        $('#ed_from_date').val(data[5].replace('<a>', '').replace('</a>', ''));
        $('#ed_to_date').val(data[6].replace('<a>', '').replace('</a>', ''));

        $('#myModal2').modal('show');
    });


    $('#form1').submit(function(event) {
        var status = true;
        var error = '';

        if(!$('#sp_level').val()){
            error += '<li>Kolom jenjang belum dipilih</li>';
            status = false;
        }
        if($('#sp_education_loc').val() == ''){
            error += '<li>Kolom nama Universitas/Sekolah masih kosong</li>';
            status = false;
        }
        if($('#sp_major').val() == ''){
            error += '<li>Kolom jurusan masih kosong</li>';
            status = false;
        }
        if($('#sp_value').val() == ''){
            error += '<li>Kolom nilai masih kosong</li>';
            status = false;
        }
        if(!$('#sp_from_date').val()){
            error += '<li>Kolom tanggal dari masih kosong</li>';
            status = false;
        }
        if(!$('#sp_major').val()){
            error += '<li>Kolom tanggal hingga masih kosong</li>';
            status = false;
        }

        if(status == false){
            $('#error_simpan').html(error);
            $('#error_simpan').show();

            return false;
        }
        
    });

    $('#bt_tambah').click(function(event) {
        $('#error_simpan').hide();
    });
});