$(function(){
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Santri');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });
    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Santri');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost/MVC/public/data/ubah');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/MVC/public/data/getubah',
            data: {id : id},
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#email').val(data.email);
                $('#nik').val(data.nik);
                $('#alamat').val(data.alamat);
                $('#asal').val(data.asal);
                $('#password').val(data.password);
                $('#id').val(data.id);
            }
        });
    });
});