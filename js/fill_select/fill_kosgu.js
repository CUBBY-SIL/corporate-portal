$(document).ready(function() {
    $.ajax({
        url: './php/KOSGU.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var dropdown = $('#sel_kosgu');
            dropdown.empty();

            var fixOpt = '';
            fixOpt = '<option selected value="0">' + 'Выберите КОСГУ' + '</option>' 
                
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