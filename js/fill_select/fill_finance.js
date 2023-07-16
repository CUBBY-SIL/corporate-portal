$(document).ready(function() {
    $.ajax({
        url: './php/FINANCE.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var dropdown = $('#sel_fin');
            dropdown.empty();

            var fixOpt = '';
            fixOpt = '<option selected value="0">' + 'Выберите Источник финансирования' + '</option>' 
                
            dropdown.append(fixOpt);

            $.each(data, function(index, value) {
                dropdown.append($('<option></option>').attr('value', value.id).text(value.name));
            });
        },
        error: function(xhr, status, error) {
        console.log(xhr.responseText);
        }
    });
});