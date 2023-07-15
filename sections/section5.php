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
            
        </div>

        <div class="table_box" style="overflow-x: hidden;">

            <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px;" id="tbl_elfbu" name="tbl_elfbu">
                <thead>
                    <tr>      
                        <th>ID_Записи</th>
                        <th>Дата</th>     
                        <th>№ контракта</th>         
                        <th style="width:400px;">Наименование</th>       
                        <th>Срок</th>       
                        <th>Факт</th>     
                    </tr>
                </thead>
            </table>
                
            <script>
                $(document).ready(function() {
                    $.ajax({
                        url: './php/fetch_data5.php',
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

                $(document).ready(function() 
                    { 
                            $("#tbl_elfbu").tablesorter(); 
                    } 
                );
            </script>
        </div><!-- END DIV TABLE BOX -->
    </body>
</html>