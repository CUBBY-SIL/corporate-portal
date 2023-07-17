$(document).ready(function() {
    $.ajax({
        url: './php/fetch_data_table/fetch_data4.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var newLine = $('#tbl_rcps');
            
            newLine.append('<tbody>');
            
            var field = data;
            var trHTML = '';

            $.each(data, function(index, value) {
                trHTML += '<tr><td>' + 
                    value.id + '</td><td>' + 
                    value.kvr + '</td><td>' + 
                    value.kosgu + '</td><td>' + 
                    value.financ + '</td><td>' + 
                    value.pvhd + '</td><td>' + 
                    value.filial + '</td><td>' + 
                    value.sum + '</td></tr>';
            });
            newLine.append(trHTML);
            newLine.append('</tbody>');

            $("#tbl_rcps").trigger('updateCache');
            $("#tbl_rcps").tablesorter();
        },
        error: function(xhr, status, error) {
        console.log(xhr.responseText);
        }
    }); 
});