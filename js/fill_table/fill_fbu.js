$(document).ready(function() {
    $.ajax({
        url: './php/fetch_data_table/fetch_data5.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var newLine = $('#tbl_elfbu');
            
            newLine.append('<tbody>');
            
            var field = data;
            var trHTML = '';

            $.each(data, function(index, value) {
                trHTML += '<tr><td>' + 
                    value.id + '</td><td>' + 
                    value.date + '</td><td>' + 
                    value.name_contr + '</td><td>' + 
                    value.name + '</td><td>' + 
                    value.term + '</td><td>' + 
                    value.fact + '</td></tr>';
            });
            newLine.append(trHTML);
            newLine.append('</tbody>');

            $("#tbl_elfbu").trigger('updateCache');
            $("#tbl_elfbu").tablesorter();
        },
        error: function(xhr, status, error) {
        console.log(xhr.responseText);
        }
    }); 
});