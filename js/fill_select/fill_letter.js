$(document).ready(function() {
    $.ajax({
        url: './php/LETTER.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var dropdown = $('#reest-add-sel_letter');
            dropdown.empty();
            
            var fixOpt = '';
            fixOpt = '<option disabled selected value="0">' + 'Выберите Наименование' + '</option>' 
            
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