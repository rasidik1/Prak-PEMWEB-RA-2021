$(document).ready(function(){
    $('#btn_tampil').click(function(){
        $('#tampil').load('contoh.php');
    });
});

// $(document).ready(function(){
//     $.get('contoh.php', function(data, status){
//         alert('Data : '+data+'\nStatus : '+status);
//     });
// });

// $(document).ready(function(){
//     $('#btn_tampil').click(function(){
//         $.post('info.php', {nama : "Putri", alamat : "Gg. Mangga 2"},
//         function(data, status) {
//             alert('Data : '+data+'\nStatus : '+status);
//         });
//     });
// });