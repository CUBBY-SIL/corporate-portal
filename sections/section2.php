<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows1251">
<title><?php echo $title; ?></title>
</head>
    <body>
        
        <script src="./js/jquery-3.6.1.js"></script>
        <script src="./js/jquery.tablesorter.js"></script>
        <script src="./js/show_hide_form.js"></script>
        
        <div class="inner_content">
            <div id="form_box">
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
            
            <?  
            if ($_SESSION['name'] == ''){
                echo "<script>
                        document.getElementById('form_box').style.display='none';  
                    </script>";    
            }
            ?>

            <h2>Извещения</h2>
        </div><!-- END DIV INNER CONTENT -->

        <div class="table_box">
            <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px;" id="tbl_izv" name="tbl_izv">
            <thead>             
                <tr>      
                    <th>ID_Записи</th>   
                    <th>Дата</th>        
                    <th style="width:180px;">Номер</th>            
                    <th style="width:180px;">Номер в ЕИС</th>          
                    <th style="width:180px;">Номер протокола</th>         
                    <th style="width:340px;">ИКЗ</th>        
                    <th>Источник</th>   
                    <th>КВР</th>   
                    <th>КОСГУ</th>   
                    <th style="width:340px;">Предмет контракта</th>  
                    <th>Дата поставки</th>   
                    <th>Исполн. Дата ПП</th>  
                    <th>Исполн. Дата фактической поставки</th>   
                    <th>Оплачено Субсидии</th>   
                    <th>Оплачено Внебюджет</th>
                    <th>Дополнительные соглашения</th>
                    <th>Перенос с 2021 года</th>
                    <th>Оплата в 2022 году</th>
                    <th>Оплата в 2023 году</th>
                    <th>Всего оплачено</th>
                    <th>Осталось оплатить</th>
                    <th>Изменение цены контракта</th>
                    <th>Неустойка</th>
                    <th>Расторгнут</th>
                    <th>Цена контракта Субсидия</th>
                    <th>Цена контракта Внебюджет</th>
                    <th>Цена контракта</th>
                    <th>Цена начальная</th>
                    <th>Экономия по результатам торгов</th>
                    <th>Способ</th>
                    <th>Кол-во заявок</th>
                    <th>Заявок не принявшие участие в торгах</th>
                    <th>Заявки Снижение на 25% и более</th>
                    <th>Кол-во заявок откл.</th>
                    <th>Статус (Состоялся/не состоялся)</th>
                    <th>Резерв</th>
                    <th>Размещено У СМП</th>
                    <th>Приказ №12бн</th>
                    <th>РП №3500-Р преимущества ОИ</th>
                    <th>РП №3500-Р преимущества УИС</th>
                    <th>ПП №1292 ЕП у УИС</th>
                    <th>ПП №616</th>
                    <th>ПП №617</th>
                    <th>ПП №878</th>
                    <th>ПП №12362</th>
                    <th>ПП №2014</th>
                    <th>Типовой контракт</th>
                    <th>Наименование поставщика</th>
                    <th>ИНН</th>
                    <th>Грузополучатель</th>
                    <th>Плательщик</th>
                    <th>Резерв2</th>
                    <th>№ ПГ</th>
                    <th>Примечание</th>
                    <th>Вид обеспечения</th>
                    <th>Сумма обеспечения</th>
                    <th>Дата ПП или БГ</th>
                    <th>Срок действия</th>
                    <th>Дата возврата</th>
                    <th>Гарантия ДА/НЕТ</th>
                    <th>Вид обеспечения гарантии</th>
                    <th>Сумма обеспечения гарантии</th>
                    <th>Дата ПП или Срок действия БГ</th>
                    <th>Срок действия гарантии</th>
                    <th>Дата возврата</th>
                </tr>
            </thead>
            </table>

            <script>
                $(document).ready(function() {
                    $.ajax({
                        url: './php/fetch_data2.php',
                        method: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            
                            var newLine = $('#tbl_izv');
                            
                            newLine.append('<tbody>');
                            
                            var field = data;
                            var trHTML = '';

                            $.each(data, function(index, value) {
                                trHTML += '<tr><td>' + 
                                    value.id + '</td><td>' + 
                                    value.date + '</td><td>' + 
                                    value.name + '</td><td>' + 
                                    value.eis + '</td><td>' + 
                                    value.num_prot + '</td><td>' + 
                                    value.ikz + '</td><td>' + 
                                    value.srcs + '</td><td>' + 
                                    value.kvr + '</td><td>' + 
                                    value.kosgu + '</td><td>' + 
                                    value.object + '</td><td>' + 
                                    value.date_post + '</td><td>' + 
                                    value.isp_date_pp + '</td><td>' + 
                                    value.isp_date_fact + '</td><td>' + 
                                    value.pay_subs + '</td><td>' + 
                                    value.pay_budg + '</td><td>' + 
                                    value.dop_sogl + '</td><td>' + 
                                    value.peren_21 + '</td><td>' + 
                                    value.opl_22 + '</td><td>' + 
                                    value.opl_23 + '</td><td>' + 
                                    value.all_pay + '</td><td>' + 
                                    value.ostatok + '</td><td>' + 
                                    value.change + '</td><td>' + 
                                    value.neustoyka + '</td><td>' + 
                                    value.rastorgnut + '</td><td>' + 
                                    value.price_sub + '</td><td>' + 
                                    value.price_budgt + '</td><td>' + 
                                    value.price_contr + '</td><td>' + 
                                    value.nach + '</td><td>' + 
                                    value.economy + '</td><td>' + 
                                    value.way + '</td><td>' + 
                                    value.amount + '</td><td>' + 
                                    value.not_take_part + '</td><td>' + 
                                    value.reduction_of_25 + '</td><td>' + 
                                    value.rejected + '</td><td>' + 
                                    value.status + '</td><td>' + 
                                    value.reserve + '</td><td>' + 
                                    value.SMP + '</td><td>' + 
                                    value.pp126n + '</td><td>' + 
                                    value.pp3500P_OI + '</td><td>' + 
                                    value.pp3500P_UIS + '</td><td>' + 
                                    value.pp1292 + '</td><td>' + 
                                    value.pp616 + '</td><td>' + 
                                    value.pp617 + '</td><td>' + 
                                    value.pp878 + '</td><td>' + 
                                    value.pp1236 + '</td><td>' + 
                                    value.pp2014 + '</td><td>' + 
                                    value.type + '</td><td>' + 
                                    value.provider + '</td><td>' + 
                                    value.inn_prov + '</td><td>' + 
                                    value.gruz + '</td><td>' + 
                                    value.payer + '</td><td>' + 
                                    value.reserve2 + '</td><td>' + 
                                    value.pg + '</td><td>' + 
                                    value.note + '</td><td>' + 
                                    value.view1 + '</td><td>' + 
                                    value.sum1 + '</td><td>' + 
                                    value.date_PP_or_BG + '</td><td>' + 
                                    value.validity_period1 + '</td><td>' + 
                                    value.return_date + '</td><td>' + 
                                    value.guarantee_yesNo + '</td><td>' + 
                                    value.view2 + '</td><td>' + 
                                    value.sum2 + '</td><td>' + 
                                    value.date_PP_or_BG + '</td><td>' + 
                                    value.validity_period2 + '</td><td>' + 
                                    value.date_return + '</td></tr>';
                            });
                            newLine.append(trHTML);
                            newLine.append('</tbody>');
                            $("#tbl_izv").trigger('updateCache');
                            $("#tbl_izv").tablesorter();
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