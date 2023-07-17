$(document).ready(function() {
    $.ajax({
        url: './php/fetch_data_table/fetch_data_users.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var newLine = $('#tbl_users');
            
            newLine.append('<tbody>');
            
            var field = data;
            var trHTML = '';

            $.each(data, function(index, value) {
                trHTML += '<tr><td>' + value.id + '</td><td>' + 
                            value.login + '</td><td>' + value.password + '</td><td>' + 
                            value.name + '</td><td>' + value.middle_name + '</td><td>' + 
                            value.last_name + '</td><td>' + value.status + '</td></tr>';  
            });
            newLine.append(trHTML);
            newLine.append('</tbody>');
            $("#tbl_users").trigger('updateCache');
            $("#tbl_users").tablesorter();
        },
        error: function(xhr, status, error) {
        console.log(xhr.responseText);
        }
    });
});