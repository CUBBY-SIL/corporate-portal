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
            <div class="form_box">
                <div class="btn_box">
                    <div id="btn_add">
                        <button id="btn_ad" class="submit1" >Добавить запись</button>
                    </div>

                    <div id="btn_edit">
                        <button id="btn_ed" class="submit1" >Редактировать запись</button>
                    </div>

                    <div id="btn_delete">
                        <button id="btn_del" class="submit1" >Удалить запись</button>
                    </div>
                </div><br/><!-- END DIV BTN BOX -->

            </div>    

            <h2>Нарушения</h2>
        </div>

        <div class="table_box" style="overflow-x: hidden;">
            <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px;" id="tbl_nar" name="tbl_nar">
                    <thead>            
                        <tr>      
                            <th>ID_Записи</th>   
                            <th>Филиал</th>        
                            <th >№ контракта</th>            
                            <th style="width:60px;">№ п/п</th>         
                            <th style="width:100px;">Дата п/п</th>
                            <th>Дата предоставления п/п</th>          
                            <th>Дата документа о приемке</th>        
                            <th>Дата приемки</th>   
                            <th>Дата предоставления</th>  
                            <th>Примечание</th>   
                        </tr>
                    </thead>
            </table>
                
            <script>
                $(document).ready(function() {
                    $.ajax({
                        url: './php/fetch_data3.php',
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

                $(document).ready(function() 
                    { 
                            $("#tbl_nar").tablesorter(); 
                    } 
                );
            </script>
        </div><!-- END DIV TABLE BOX -->
    </body>
</html>