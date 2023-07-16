$(document).ready(function() {
    $.ajax({
        url: './php/fetch_data_table/fetch_data1.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var newLine = $('#tbl_rer');
            
            newLine.append('<tbody>');
            
            var field = data;
            var trHTML = '';

            $.each(data, function(index, value) {
                trHTML += '<tr><td>' + value.id + '</td><td>' + value.name + 
                '</td><td>' + value.date + '</td><td>' + value.object + 
                '</td><td>' + value.counter + '</td><td>' + value.inn + 
                '</td><td>' + value.dogovor_agreed + '</td><td>' + value.dogovor_concluded + 
                '</td><td>' + value.KVR_name + '</td><td>' + value.KOSGU_name + 
                '</td><td>' + value.fin_name + '</td><td>' + value.branch_name + 
                '</td><td>' + value.letter_name + '</td><td>' + value.letter_date + 
                '</td><td>' + value.PVH + '</td><td>' + value.paid + 
                '</td><td>' + value.balance + '</td><td>' + value.note_name + '</td></tr>';
            });
            newLine.append(trHTML);
            newLine.append('</tbody>');

            $("#tbl_rer").trigger('updateCache');
            $("#tbl_rer").tablesorter();
        },
        error: function(xhr, status, error) {
        console.log(xhr.responseText);
        }
    }); 
});