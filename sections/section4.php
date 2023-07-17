<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows1251">
<title><?php echo $title; ?></title>
</head>
    <body>
        
        <script src="./js/jquery-3.6.1.js"></script>
        <script src="./js/jquery.tablesorter.js"></script>
        
        <div class="inner_content">
            
            <h2>Чеки</h2>
        </div>

        <div class="table_box" style="overflow-x: hidden;">

            <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px;" id="tbl_rcps" name="tbl_rcps">
                <thead>            
                    <tr>      
                        <th>ID_Записи</th> 
                        <th>КВР</th>      
                        <th>КОСГУ</th>          
                        <th>Источник финансирования</th>        
                        <th>ПФХД</th>      
                        <th>Филиал</th>        
                        <th>Сумма, руб</th> 
                    </tr>
                </thead>
            </table>
                    
            <script>
                $(document).ready(function() {
                    $.ajax({
                        url: './php/fetch_data4.php',
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

                $(document).ready(function() 
                    { 
                            $("#tbl_rcps").tablesorter(); 
                    } 
                );
            </script>
        </div><!-- END DIV TABLE BOX -->
    </body>
</html>