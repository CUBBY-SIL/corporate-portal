$(document).ready(function() {
    $.ajax({
        url: './php/fetch_data_table/fetch_data3.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var newLine = $('#tbl_nar');
            
            newLine.append('<tbody>');
            
            var field = data;
            var trHTML = '';

            $.each(data, function(index, value) {
                trHTML += '<tr><td>' + 
                    value.id + '</td><td>' + 
                    value.filial + '</td><td>' + 
                    value.name + '</td><td>' + 
                    value.number_pp + '</td><td>' + 
                    value.date_pp + '</td><td>' + 
                    value.date_prov_pp + '</td><td>' + 
                    value.date_doc_acceptance + '</td><td>' + 
                    value.date_acceptance + '</td><td>' + 
                    value.date_providing + '</td><td>' + 
                    value.note + '</td></tr>';
            });
            newLine.append(trHTML);
            newLine.append('</tbody>');
            $("#tbl_nar").trigger('updateCache');
            $("#tbl_nar").tablesorter();
        },
        error: function(xhr, status, error) {
        console.log(xhr.responseText);
        }
    }); 
});