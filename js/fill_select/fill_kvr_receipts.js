$(document).ready(function() {
    $.ajax({
        url: './php/KVR.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var dropdown = $('#receipts-add-sel_kvr');
            dropdown.empty();
            
            var fixOpt = '';
            fixOpt = '<option disabled selected value="0">' + 'Выберите КВР' + '</option>' 
            
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