<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows1251">
<title><?php echo $title; ?></title>
</head>
    <body>
        
        <script src="./js/jquery-3.6.1.js"></script>
        <script src="./js/jquery.tablesorter.js"></script>
        <script src="./js/validate_reestr.js"></script>
        
        <div class="inner_content">

            <div id="form_box">
                <div class="btn_box">
                    <div id="btn_add">
                        <button onclick="document.getElementById('form_add').style.display='block';
                        document.getElementById('form_edit').style.display='none';
                        document.getElementById('form_delete').style.display='none';
                        document.getElementById('btn_add').style.display='none';
                        document.getElementById('btn_edit').style.display='block';
                        document.getElementById('btn_delete').style.display='block';" class="submit1" >Добавить запись</button>
                    </div>

                    <div id="btn_edit">
                        <button onclick="document.getElementById('form_add').style.display='none';
                        document.getElementById('form_edit').style.display='block';
                        document.getElementById('form_delete').style.display='none';
                        document.getElementById('btn_add').style.display='block';
                        document.getElementById('btn_edit').style.display='none';
                        document.getElementById('btn_delete').style.display='block';" class="submit1" >Редактировать запись</button>
                    </div>

                    <div id="btn_delete">
                        <button onclick="document.getElementById('form_add').style.display='none';
                        document.getElementById('form_edit').style.display='none';
                        document.getElementById('form_delete').style.display='block';
                        document.getElementById('btn_add').style.display='block';
                        document.getElementById('btn_edit').style.display='block';
                        document.getElementById('btn_delete').style.display='none';" class="submit1" >Удалить запись</button>
                    </div>
                </div><br/><!-- END DIV BTN BOX -->
            </div><!-- END DIV FORM BOX -->

        

            <h2>Реестр</h2>
        </div>

        <div class="table_box">
                <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px;" id="tbl_rer" name="tbl_rer">
                    <thead>
                        <tr>
                            <th>ID_Записи</th>
                            <th>Номер договора</th>
                            <th>Дата</th>
                            <th style="width:300px;">Предмет</th>
                            <th>Контрагент</th>
                            <th>ИНН</th>
                            <th>Цена договора согласована</th>
                            <th>Цена договора заключенный</th>
                            <th>КВР</th>
                            <th>КОСГУ</th>
                            <th>Источник финасирования</th>
                            <th>Филиал</th>
                            <th>Письмо согласования</th>
                            <th>Дата письма согласования</th>
                            <th>ПФХД</th>   
                            <th>Оплачено</th>   
                            <th>Остаток</th>   
                            <th>Примечание</th>   
                        </tr>
                    </thead>
                </table>

                <script>
                    $(document).ready(function() {
                        $.ajax({
                            url: './php/fetch_data1.php',
                            method: 'GET',
                            dataType: 'json',
                            success: function(data) {
                                var newLine = $('#tbl_rer');
                                
                                newLine.append('<tbody>');
                                
                                var field = data;
                                var trHTML = '';

                                $.each(data, function(index, value) {
                                    trHTML += '<tr><td>' + value.id + '</td><td>' + value.name + 
                                    '</td><td>' + value.date + '</td><td>' + value.object + 
                                    '</td><td>' + value.counter + '</td><td>' + value.inn + 
                                    '</td><td>' + value.dogovor_agreed + '</td><td>' + value.dogovor_concluded + 
                                    '</td><td>' + value.KVR_name + '</td><td>' + value.KOSGU_name + 
                                    '</td><td>' + value.fin_name + '</td><td>' + value.branch_name + 
                                    '</td><td>' + value.letter_name + '</td><td>' + value.letter_date + 
                                    '</td><td>' + value.PVH + '</td><td>' + value.paid + 
                                    '</td><td>' + value.balance + '</td><td>' + value.note_name + '</td></tr>';
                                });
                                newLine.append(trHTML);
                                newLine.append('</tbody>');

                                $("#tbl_rer").trigger('updateCache');
                                $("#tbl_rer").tablesorter();
                            },
                            error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                            }
                        }); 
                    });

                    $(document).ready(function() 
                        { 
                                $("#tbl_rer").tablesorter(); 
                        } 
                    );
                </script>
        </div><!-- END DIV TABLE BOX -->

    </body> 
</html>