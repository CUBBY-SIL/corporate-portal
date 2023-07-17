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

                <div id="form_add_edit" style="display:none;">
                        
                    <h2 id="h_add" style="display:none;">Добавить запись</h2>
                    <h2 id="h_edit" style="display:none;">Редактировать запись</h2>

                    <br>
                    
                        <form  name="form1" method="post" action="" id="form1">

                            <div id="edit_num_row" class="inner-block-add" style="margin-bottom:25px; display:none;">
                                <label for="reestr-edit-num_row" class="label-style" style="text-align: left; margin-left:8px;">ID Записи:</label>
                                <input class="input_block" type="text" name="reestr-edit-num_row" id="reestr-edit-num_row" placeholder="Введите номер" />
                            </div>
                            
                            <div class="block-add">
                            
                            <div class="inner-block-add">
                                <label for="notifications-add-date" class="label-style">Дата:</label>
                                <input class="input_block" type="date"  name="notifications-add-date" id="notifications-add-date" />
                            </div>
                                
                            <div class="inner-block-add">
                                <label for="notifications-add-num" class="label-style">Номер:</label>
                                <input class="input_block" type="text" name="notifications-add-num" id="notifications-add-num" placeholder="Введите номер" />
                            </div>
                               
                            <div class="inner-block-add">
                                <label for="notifications-add-num_eis" class="label-style">Номер в ЕИС:</label>
                                <input class="input_block" type="text"  name="notifications-add-num_eis" id="notifications-add-num_eis" placeholder="Введите номер в ЕИС" />
                            </div>
                                
                            <div class="inner-block-add">
                                <label for="notifications-add-id_protocol" class="label-style">ID протокола:</label>
                                <input class="input_block" type="text"  name="notifications-add-id_protocol" id="notifications-add-id_protocol" placeholder="Введите ID протокола" />
                            </div>
                                
                            <div class="inner-block-add">
                                <label for="notifications-add-ikz" class="label-style">ИКЗ:</label>
                                <input class="input_block" type="text"  name="notifications-add-ikz" id="notifications-add-ikz" placeholder="Введите ИКЗ" />
                            </div>
                                
                            <div class="inner-block-add">
                                <label for="notifications-add-object" class="label-style">Предмет:</label>
                                <input class="input_block" type="text"  name="notifications-add-object" id="notifications-add-object" placeholder="Введите предмет" />
                            </div>
                                
                            <div class="inner-block-add">
                                <label for="notifications-add-change_price" style="margin-top: -5px;" class="label-style">Изменение цены контракта:</label>
                                <input class="input_block" type="text" name="notifications-add-change_price" id="notifications-add-change_price" placeholder="Введите изменение цены контракта" />
                            </div>
                               
                            <div class="inner-block-add">
                                <label for="notifications-add-penalty" class="label-style">Неустойка:</label>
                                <input class="input_block" type="text"  name="notifications-add-penalty" id="notifications-add-penalty" placeholder="Введите неустойку" />
                            </div>
                                
                            <div class="inner-block-add">
                                <label for="notifications-add-terminated" class="label-style">Расторгнут:</label>
                                <select id="notifications-add-terminated" class="input_block2" style="width: 250px;">
                                                <option>Выберите да/нет</option>
                                                <option>Да</option>
                                                <option>Нет</option>
                                </select>
                            </div>
                                
                            <div class="inner-block-add">
                                <label for="notifications-add-economy" class="label-style">Экономия:</label>
                                <input class="input_block" type="text"  name="notifications-add-economy" id="notifications-add-economy" placeholder="Введите экономию" />
                            </div>
                                
                            <div class="inner-block-add">
                                <label for="notifications-add-method" class="label-style">Способ:</label>
                                <input class="input_block" type="text"  name="notifications-add-method" id="notifications-add-method" placeholder="Введите способ" />
                            </div>
                                
                            <div class="inner-block-add">
                                <label for="notifications-add-status" class="label-style">Статус:</label>
                                <select id="notifications-add-status" class="input_block2" style="width: 250px;">
                                                <option>Выберите вариант</option>
                                                <option>Состоялся</option>
                                                <option>Не состоялся</option>
                                </select>
                            </div>
                                
                            </div><!--END block-add -->
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                            <fieldset style="margin-bottom: 25px;">
                                    <legend>Оплачено</legend>
                                    
                                <div id="notifications-add-input-paid">
                                
                                    <div class="grid2" style="grid-template-columns: 655px 655px; margin-bottom: 20px;">
                                        
                                        <div id="notifications-add-input-paid_vnebud" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-input-paid_vnebud" class="label-style" style="text-align: left;">Оплачено ВНЕБЮДЖЕТ:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-input-paid_vnebud" id="notifications-add-input-paid_vnebud" placeholder="Введите оплачено внебюджет"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-input-paid_2021g" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-input-paid_2021" class="label-style" style="text-align: left;">Перенос с 2021 года:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-input-paid_2021" id="notifications-add-input-paid_2021" placeholder="Введите перенос с 2021 года"/>
                                            
                                        </div>
                                    
                                        <div id="notifications-add-input-paid_subsidies" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-input-paid_subs" class="label-style" style="text-align: left;">Оплачено СУБСИДИИ:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-input-paid_subs" id="notifications-add-input-paid_subs" placeholder="Введите оплачено субсидии"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-input-paid_2022g" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-input-paid_2022" class="label-style" style="text-align: left;">Оплата в 2022 году:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-input-paid_2022" id="notifications-add-input-paid_2022" placeholder="Введите оплата в 2022 году"/>
                                            
                                        </div>                                     
                                        
                                        <div id="notifications-add-input-paid_summ" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-input-paid_summ" class="label-style" style="text-align: left;">Всего оплачено:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-input-paid_summ" id="notifications-add-input-paid_summ" placeholder="Введите всего оплачено"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-input-paid_2023g" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-input-paid_2023" class="label-style" style="text-align: left;">Оплата в 2023 году:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-input-paid_2023" id="notifications-add-input-paid_2023" placeholder="Введите оплата в 2023 году"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-input-paid_remains" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-input-paid_remains" class="label-style" style="text-align: left;">Осталось оплатить:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-input-paid_remains" id="notifications-add-input-paid_remains" placeholder="Введите осталось оплатить"/>
                                            
                                        </div>
                                    
                                    </div>
                                    
                                </div><!--END input_paid -->
                                    
                            </fieldset>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                            <div class="grid2">
                                
                            <div>
                                    <fieldset>

                                        <legend>Цена</legend>
                                        <div>
                                            
                                             <div id="notifications-add-input-price" class="inner-block-add" style="margin-bottom: 10px;">
                                            
                                                <label for="notifications-add-price_contr_subs" class="label-style" style="text-align: left; margin-top:-3px;">Цена контракта Субсидия:</label>
                                                <input class="input_block2" type="text"  name="notifications-add-price_contr_subs" id="notifications-add-price_contr_subs" placeholder="Введите цену контракта Субсидия" />

                                                <label for="notifications-add-price_vnebud" class="label-style" style="text-align: left; margin-top:-4px;">Цена контракта Внебюджет:</label>
                                                <input class="input_block2" type="text"  name="notifications-add-price_vnebud" id="notifications-add-price_vnebud" placeholder="Введите цену контракта Внебюджет"/>

                                                <label for="notifications-add-price_contr" class="label-style" style="text-align: left;">Цена контракта:</label>
                                                <input class="input_block2" type="text"  name="notifications-add-price_contr" id="notifications-add-price_contr" placeholder="Введите цену контракта"/>
                                                
                                                <label for="notifications-add-price_initial" class="label-style" style="text-align: left;">Цена начальная:</label>
                                                <input class="input_block2" type="text"  name="notifications-add-price_initial" id="notifications-add-price_initial" placeholder="Введите начальную цену"/>
                                            
                                            </div>
 
                                        </div>
                                    </fieldset>
                            </div>
<!-----------------------------------------------------------------------------------------------------------------------------------------------------> 
                            <div>
                                    <fieldset>

                                        <legend>Заявки</legend>
                                        <div>
                                            
                                             <div id="notifications-add-input-request" class="inner-block-add" style="grid-template-columns: 250px 1fr; margin-bottom: 10px;">
                                            
                                                <label for="notifications-add-request_count" class="label-style" style="text-align: left;">Количество заявок:</label>
                                                <input class="input_block2" style="width: 350px;" type="text"  name="notifications-add-request_count" id="notifications-add-request_count" placeholder="Введите количество заявок" />

                                                <label for="notifications-add-request_not_accepted" class="label-style" style="text-align: left; margin-top:-5px;">Заявок не принявших участие в торгах:</label>
                                                <input class="input_block2" style="width: 350px;" type="text"  name="notifications-add-request_not_accepted" id="notifications-add-request_not_accepted" placeholder="Введите кол-во заявок не принявших участие"/>

                                                <label for="notifications-add-request_decline" class="label-style" style="text-align: left; margin-top:-5px;">Заявки Снижение 25% и более:</label>
                                                <input class="input_block2" style="width: 350px;" type="text"  name="notifications-add-request_decline" id="notifications-add-request_decline" placeholder="Введите заявки снижение 25%"/>
                                                
                                                <label for="notifications-add-request_rejected" class="label-style" style="text-align: left; margin-top:-5px;">Количество отклоненных заявок:</label>
                                                <input class="input_block2" style="width: 350px;" type="text"  name="notifications-add-request_rejected" id="notifications-add-request_rejected" placeholder="Введите кол-во отклоненных заявок"/>
                                            
                                            </div>
 
                                        </div>
                                    </fieldset>
                            </div>

                            </div><!--END grid2 -->
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                            <div class="grid2">
                                
                                <div>
                                    <fieldset>
                                        <legend>КВР</legend>
                                        <div id="notifications-add-input-kvr" class="inner-block-add">
                                            <label for="notifications-add-num_kvr" class="label-style" style="text-align: left;">КВР:</label>
                                            <input class="input_block2" type="text"  name="notifications-add-kvr_contr" id="notifications-add-kvr_contr" placeholder="Номер КВР"/>
                                        </div>
                                        <div id="notifications-add-select-kvr" style="display: none;" class="inner-block-add">
                                            <label for="notifications-add-kvr" class="label-style" style="text-align: left;">КВР:</label>
                                            <select id="notifications-add-kvr" class="input_block2">
                                                <option>Выберите КВР</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div id="notifications-add-check-sel-kvr">
                                            <label for="notifications-add-check-select" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="notifications-add-check-select-kvr" 
                                            onclick="document.getElementById('notifications-add-input-kvr').style.display='none';
                                                     document.getElementById('notifications-add-select-kvr').style.display='grid';
                                                     document.getElementById('notifications-add-check-sel-kvr').style.display='none';
                                                     document.getElementById('notifications-add-check-add-kvr').style.display='block';"><br>
                                        </div>

                                        <div id="notifications-add-check-add-kvr" style="display: none;">
                                            <label for="notifications-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="notifications-add-check-select-kvr" 
                                            onclick="document.getElementById('notifications-add-input-kvr').style.display='grid';
                                                     document.getElementById('notifications-add-select-kvr').style.display='none';
                                                     document.getElementById('notifications-add-check-sel-kvr').style.display='block';
                                                     document.getElementById('notifications-add-check-add-kvr').style.display='none';">
                                        </div>
                                    </fieldset>
                                </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                                <div>
                                    <fieldset>
                                        <legend>Источник финансирования</legend>
                                        <div id="notifications-add-input-nfin" class="inner-block-add">
                                            <label for="notifications-add-nfin" class="label-style" style="margin-top: -5px;">Источник финансирования:</label>
                                            <input class="input_block2" type="text"  name="notifications-add-nfin" id="notifications-add-nfin" placeholder="Наименование"/>
                                        </div>
                                        <div id="notifications-add-select-nfin" style="display: none;" class="inner-block-add">
                                            <label for="notifications-add-nfin" class="label-style" style="margin-top: -5px;">Источник финансирования:</label>
                                            <select id="notifications-add-nfin" class="input_block2">
                                                <option>Выберите источник финансирования</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div id="notifications-add-check-sel-nfin">
                                            <label for="notifications-add-check-select" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="notifications-add-check-select-nfin" 
                                            onclick="document.getElementById('notifications-add-input-nfin').style.display='none';
                                                     document.getElementById('notifications-add-select-nfin').style.display='grid';
                                                     document.getElementById('notifications-add-check-sel-nfin').style.display='none';
                                                     document.getElementById('notifications-add-check-add-nfin').style.display='block';">
                                        </div>

                                        <div id="notifications-add-check-add-nfin" style="display: none;">
                                            <label for="notifications-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="notifications-add-check-select-nfin" 
                                            onclick="document.getElementById('notifications-add-input-nfin').style.display='grid';
                                                     document.getElementById('notifications-add-select-nfin').style.display='none';
                                                     document.getElementById('notifications-add-check-sel-nfin').style.display='block';
                                                     document.getElementById('notifications-add-check-add-nfin').style.display='none';">
                                        </div>
                                    </fieldset>
                                </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->    
                                <div>
                                    <fieldset>
                                        <legend>КОСГУ</legend>
                                        <div id="notifications-add-input-kosgu" class="inner-block-add">
                                            <label for="notifications-add-num_kosgu" class="label-style" style="text-align: left;">КОСГУ:</label>
                                            <input class="input_block2" type="text"  name="notifications-add-kosgu" id="notifications-add-kosgu" placeholder="Номер КОСГУ"/>
                                        </div>
                                        <div id="notifications-add-select-kosgu" style="display: none;" class="inner-block-add">
                                            <label for="notifications-add-kosgu" class="label-style" style="text-align: left;">КОСГУ:</label>
                                            <select class="input_block2">
                                                <option>Выберите КОСГУ</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div id="notifications-add-check-sel-kosgu">
                                            <label for="notifications-add-check-select" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="notifications-add-check-select-kosgu" 
                                            onclick="document.getElementById('notifications-add-input-kosgu').style.display='none';
                                                     document.getElementById('notifications-add-select-kosgu').style.display='grid';
                                                     document.getElementById('notifications-add-check-sel-kosgu').style.display='none';
                                                     document.getElementById('notifications-add-check-add-kosgu').style.display='block';">
                                        </div>

                                        <div id="notifications-add-check-add-kosgu" style="display: none;">
                                            <label for="notifications-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="notifications-add-check-select-kosgu" 
                                            onclick="document.getElementById('notifications-add-input-kosgu').style.display='grid'; 
                                                     document.getElementById('notifications-add-select-kosgu').style.display='none';
                                                     document.getElementById('notifications-add-check-sel-kosgu').style.display='block';
                                                     document.getElementById('notifications-add-check-add-kosgu').style.display='none';">
                                        </div>
                                    </fieldset>
                                </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->               
                                <div>
                                    <fieldset>

                                        <legend>Поставщик</legend>
                                        <div >
                                        <div id="notifications-add-input-provider" class="inner-block-add">
                                            
                                            <label for="notifications-add-input-provider_name" class="label-style" style="text-align: left; margin-top:-5px;">Наименование поставщика:</label>
                                            <input class="input_block2" type="date"  name="notifications-add-input-provider_name" id="notifications-add-input-provider_name"/>
                                            
                                            <label for="notifications-add-input-provider_inn" class="label-style" style="text-align: left;">ИНН:</label>
                                            <input class="input_block2" type="date"  name="notifications-add-input-provider_inn" id="notifications-add-input-provider_inn"/>
                                            
                                        </div>
                                            
                                        <div id="notifications-add-select-provider" class="inner-block-add" style="display: none;">
                                            
                                            <label for="notifications-add-select-provider" class="label-style" style="text-align: left;">Поставщик:</label>
                                            <select id="notifications-add-select-provider" class="input_block2">
                                                <option>Выберите поставщика</option>
                                            </select>

                                        </div>
                                        <br>
                                        <div id="notifications-add-check-sel-provider">
                                            <label for="reest-add-check-select-price" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="reest-add-check-select-price" 
                                            onclick="document.getElementById('notifications-add-input-provider').style.display='none';
                                                     document.getElementById('notifications-add-select-provider').style.display='grid';
                                                     document.getElementById('notifications-add-check-sel-provider').style.display='none';
                                                     document.getElementById('notifications-add-check-add-provider').style.display='block';"><br>
                                        </div>

                                        <div id="notifications-add-check-add-provider" style="display: none;">
                                            <label for="reest-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="reest-add-check-select-price" 
                                            onclick="document.getElementById('notifications-add-input-provider').style.display='grid'; 
                                                     document.getElementById('notifications-add-select-provider').style.display='none'; 
                                                     document.getElementById('notifications-add-check-sel-provider').style.display='block'; 
                                                     document.getElementById('notifications-add-check-add-provider').style.display='none';">
                                        </div>
                                        </div>
                                    </fieldset>
                                </div>
                            
                            </div><!--END grid2 -->
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                            <fieldset style="margin-bottom: 25px;">
                                    <legend>ПП</legend>
                                    
                                <div id="notifications-add-input-pp">
                                
                                    <div class="grid2" style="grid-template-columns: 655px 655px; margin-bottom: 20px;">
                                        
                                        <div id="notifications-add-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-pp_656" class="label-style" style="text-align: left;">Приказ №12бн:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-pp_656" id="notifications-add-pp_656" placeholder="Приказ №12бн"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-pp_341" class="label-style" style="text-align: left; margin-top: -5px;">РП №3500-Р преимущества ОИ:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-pp_341" id="notifications-add-pp_341" placeholder="РП №3500-Р преимущества ОИ"/>
                                            
                                        </div>
                                    
                                        <div id="notifications-add-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-order_126" class="label-style" style="text-align: left; margin-top: -5px;">РП №3500-Р преимущества УИС:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-order_126" id="notifications-add-order_126" placeholder="РП №3500-Р преимущества УИС"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-pp_649" class="label-style" style="text-align: left;">ПП №1292 ЕП у УИС:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-pp_649" id="notifications-add-pp_649" placeholder="ПП №1292 ЕП у УИС"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-pp_616" class="label-style" style="text-align: left;">ПП №616:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-pp_616" id="notifications-add-pp_616" placeholder="ПП №616"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-pp_878" class="label-style" style="text-align: left;">ПП №878:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-pp_878" id="notifications-add-pp_878" placeholder="ПП №878"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-pp_1236" class="label-style" style="text-align: left;">ПП №12362:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-pp_1236" id="notifications-add-pp_1236" placeholder="ПП №12362"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-pp_617" class="label-style" style="text-align: left;">ПП №617:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-pp_617" id="notifications-add-pp_617" placeholder="ПП №617"/>
                                            
                                        </div>
                                        
                                        <div id="notifications-add-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                            
                                            <label for="notifications-add-pp_2014" class="label-style" style="text-align: left;">ПП №2014:</label>
                                            <input style="width:330px;" class="input_block" type="text"  name="notifications-add-pp_2014" id="notifications-add-pp_2014" placeholder="ПП №2014"/>
                                            
                                        </div>
                                    
                                    </div>
                                    
                                </div><!--END input_paid -->
                                    
                            </fieldset>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                             <div class="grid2">   
                                <div>
                                    <fieldset>

                                        <legend>Дата поставки</legend>
                                        <div >
                                        <div id="notifications-add-input-delivery_date" class="inner-block-add">
                                            
                                            <label for="notifications-add-input-date" class="label-style" style="text-align: left;">Дата поставки:</label>
                                            <input class="input_block2" type="date"  name="notifications-add-input-date" id="notifications-add-input-date" />
                                            
                                            <label for="notifications-add-input-date_pp" class="label-style" style="text-align: left;">Исполн. Дата пп:</label>
                                            <input class="input_block2" type="date"  name="notifications-add-input-date_pp" id="notifications-add-input-date_pp"/>
                                            
                                            <label for="notifications-add-input-date_fact" class="label-style" style="text-align: left; margin-top: -5px;">Исполн. Дата фактической:</label>
                                            <input class="input_block2" type="date"  name="notifications-add-input-date_fact" id="notifications-add-input-date_fact"/>
                                            
                                        </div>
                                            
                                        <div id="notifications-add-select-delivery_date" class="inner-block-add" style="display: none;">
                                            
                                            <label for="notifications-add-select-date" class="label-style" style="text-align: left;">Дата поставки:</label>
                                            <select id="notifications-add-select-date" class="input_block2">
                                                <option>Выберите дату поставки</option>
                                            </select>
                                            
                                        </div>
                                        <br>
                                        <div id="notifications-add-check-sel-del_date">
                                            <label for="reest-add-check-select-price" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="reest-add-check-select-price" 
                                            onclick="document.getElementById('notifications-add-input-delivery_date').style.display='none';
                                                     document.getElementById('notifications-add-select-delivery_date').style.display='grid';
                                                     document.getElementById('notifications-add-check-sel-del_date').style.display='none';
                                                     document.getElementById('notifications-add-check-add-del_date').style.display='block';"><br>
                                        </div>

                                        <div id="notifications-add-check-add-del_date" style="display: none;">
                                            <label for="reest-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="reest-add-check-select-price" 
                                            onclick="document.getElementById('notifications-add-input-delivery_date').style.display='grid'; 
                                                     document.getElementById('notifications-add-select-delivery_date').style.display='none'; 
                                                     document.getElementById('notifications-add-check-sel-del_date').style.display='block'; 
                                                     document.getElementById('notifications-add-check-add-del_date').style.display='none';">
                                        </div>
                                        </div>
                                    </fieldset>
                                </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->   
                                 <div>
                                    <fieldset>

                                        <legend>Обеспечение</legend>
                                        <div >
                                        <div id="notifications-add-input-provision" class="inner-block-add">
                                            
                                            <label for="notifications-add-input-provision_type" class="label-style" style="text-align: left;">Вид обеспечения:</label>
                                            <input class="input_block2" type="text"  name="notifications-add-input-provision_type" id="notifications-add-input-provision_type" placeholder="Введите вид обеспечения"/>
                                            
                                            <label for="notifications-add-input-provision_date_back" class="label-style" style="text-align: left;">Дата возврата:</label>
                                            <input class="input_block2" type="date"  name="notifications-add-input-provision_date_back" id="notifications-add-input-provision_date_back" />
                                            
                                            <label for="notifications-add-input-provision_summ" class="label-style" style="text-align: left; margin-top: -5px;">Сумма обеспечения:</label>
                                            <input class="input_block2" type="text"  name="notifications-add-input-provision_summ" id="notifications-add-input-provision_summ" placeholder="Введите сумму возврата"/>
                                            
                                        </div>
                                            
                                        <div id="notifications-add-select-provision" class="inner-block-add" style="display: none;">
                                            
                                            <label for="notifications-add-select-provision_type" class="label-style" style="text-align: left;">Вид обеспечения:</label>
                                            <select id="notifications-add-select-provision_type" class="input_block2">
                                                <option>Выберите вид обеспечения</option>
                                            </select>
                                            
                                        </div>
                                        <br>
                                        <div id="notifications-add-check-sel-provision">
                                            <label for="reest-add-check-select-price" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="reest-add-check-select-price" 
                                            onclick="document.getElementById('notifications-add-input-provision').style.display='none';
                                                     document.getElementById('notifications-add-select-provision').style.display='grid';
                                                     document.getElementById('notifications-add-check-sel-provision').style.display='none';
                                                     document.getElementById('notifications-add-check-add-provision').style.display='block';"><br>
                                        </div>

                                        <div id="notifications-add-check-add-provision" style="display: none;">
                                            <label for="reest-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="reest-add-check-select-price" 
                                            onclick="document.getElementById('notifications-add-input-provision').style.display='grid'; 
                                                     document.getElementById('notifications-add-select-provision').style.display='none'; 
                                                     document.getElementById('notifications-add-check-sel-provision').style.display='block'; 
                                                     document.getElementById('notifications-add-check-add-provision').style.display='none';">
                                        </div>
                                        </div>
                                    </fieldset>
                                </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                                 <div>
                                    <fieldset>

                                        <legend>Дата ПП</legend>
                                        <div >
                                        <div id="notifications-add-input-date_pp" class="inner-block-add" style="margin-bottom: 10px;">
                                            
                                            <label for="notifications-add-input-date_pp_validity_period" class="label-style" style="text-align: left;">Срок действия:</label>
                                            <input class="input_block2" type="date" name="notifications-add-input-date_pp_validity_period" id="notifications-add-input-date_pp_validity_period"/>
                                            
                                            <label for="notifications-add-input-date_pp_bg" class="label-style" style="text-align: left;">Дата ПП или БГ:</label>
                                            <input class="input_block2" type="date"  name="notifications-add-input-date_pp_bg" id="notifications-add-input-date_pp_bg"/>
                                            
                                            <label for="notifications-add-input-date_pp_back" class="label-style" style="text-align: left;">Дата возврата:</label>
                                            <input class="input_block2" type="date"  name="notifications-add-input-date_pp_back" id="notifications-add-input-date_pp_back"/>
                                            
                                            <label for="notifications-add-input-date_pp_or_val_per" class="label-style" style="text-align: left; margin-top: -5px;">Дата ПП или Срок действия:</label>
                                            <input class="input_block2" type="date"  name="notifications-add-input-date_pp_or_val_per" id="notifications-add-input-date_pp_or_val_per"/>
                                            
                                        </div>

                                        </div>
                                    </fieldset>
                                </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                                 <div >
                                    <fieldset >

                                        <legend>Гарантия</legend>
                                        <div >
                                        <div id="notifications-add-input-guarantee" class="inner-block-add" style="margin-bottom: 10px; height: 170px;">
                                            
                                            <label for="notifications-add-input-guarantee_yn" class="label-style" style="text-align: left;">Гарантия ДА/НЕТ:</label>
                                            <select id="notifications-add-input-guarantee_yn" class="input_block2">
                                                <option>Выберите вариант</option>
                                                <option>Да</option>
                                                <option>Нет</option>
                                            </select>
                                            
                                            <label for="notifications-add-input-guarantee_summ" class="label-style" style="text-align: left;">Сумма обеспечения гарантии:</label>
                                            <input class="input_block2" type="text" style="margin-top:15px;"  name="notifications-add-input-guarantee_summ" id="notifications-add-input-guarantee_summ" placeholder="Введите сумму обеспечения гарантии" />
                                            
                                            <label for="notifications-add-input-guarantee_type" class="label-style" style="text-align: left;">Вид обеспечения гарантии:</label>
                                            <select id="notifications-add-input-guarantee_type" style="margin-top:5px;" class="input_block2">
                                                <option>Выберите вариант</option>
                                            </select>
                                            
                                        </div>

                                        </div>
                                    </fieldset>
                                </div>
                                 
                                 
                                 </div><!--END grid2 -->
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                            <div class="block-add">
                            
                                <div class="inner-block-add">
                                    <label for="notifications-add-reserve" class="label-style">Резерв:</label>
                                    <input class="input_block" type="text"  name="notifications-add-reserve" id="notifications-add-reserve" placeholder="Введите резерв"/>
                                </div>
                                
                                <div class="inner-block-add">
                                    <label for="notifications-add-reserve2" class="label-style">Резерв2:</label>
                                    <input class="input_block" type="text"  name="notifications-add-reserve2" id="notifications-add-reserve2" placeholder="Введите резерв2" />
                                </div>

                                <div class="inner-block-add">
                                    <label for="notifications-add-typical_contr" class="label-style">Типовой контракт:</label>
                                    <input class="input_block" type="text"  name="notifications-add-typical_contr" id="notifications-add-typical_contr" placeholder="Введите типовой контракт" />
                                </div>

                                <div class="inner-block-add">
                                    <label for="notifications-add-recipient" class="label-style">Грузополучатель:</label>
                                    <input class="input_block" type="text"  name="notifications-add-recipient" id="notifications-add-recipient" placeholder="Введите грузополучателя" />
                                </div>

                                <div class="inner-block-add">
                                    <label for="notifications-add-ikz" class="label-style">ИКЗ:</label>
                                    <input class="input_block" type="text"  name="notifications-add-ikz" id="notifications-add-ikz" placeholder="Введите ИКЗ" />
                                </div>

                                <div class="inner-block-add">
                                    <label for="notifications-add-payer" class="label-style">Плательщик:</label>
                                    <input class="input_block" type="text"  name="notifications-add-payer" id="notifications-add-payer" placeholder="Введите плательщика" />
                                </div>
                                
                                <div class="inner-block-add">
                                    <label for="notifications-add-smp" style="margin-top: -5px;" class="label-style">Размещено У СМП:</label>
                                    <input class="input_block" type="text"  name="notifications-add-smp" id="notifications-add-smp" placeholder="Размещено У СМП" />
                                </div>
                                
                                <div class="inner-block-add">
                                    <label for="notifications-add-num_pg" class="label-style">№ ПГ:</label>
                                    <input class="input_block" type="text"  name="notifications-add-num_pg" id="notifications-add-num_pg" placeholder="Введите № ПГ" />
                                </div>
                                
                                <div class="inner-block-add">
                                    <label for="notifications-add-comment" class="label-style">Примечание:</label>
                                    <textarea class="txt_area_style" style="width: 295px;" name="notifications-add-comment" id="notifications-add-comment" placeholder="Введите примечание"></textarea>
                                </div>
                                
                            </div><!--END block-add -->
                            
                            <input class="submit1" id="btn_sub_add" 
                            style="margin:0 auto; margin-top:25px; display:none;"  type="button" 
                            name="submit1" value="Добавить запись"
                            onclick="return validate_form_add_notifications( );"
                            />
                            <input class="submit1" id="btn_sub_edit" 
                            style="margin:0 auto; margin-top:25px; display:none;"  type="button" 
                            name="submit1" value="Редактировать запись"
                            onclick="return validate_form_add_notifications( );"
                            />
                        </form><br>
                </div><!--END FORM ADD EDIT -->

                <div id="form_delete" style="display:none;">
                    <h2>Удалить запись</h2><br/>

                    <form name="form3" method="post" id="form1" style="display:block" onsubmit="return validate_form_delete_notifications ( );">
                        <input class="input_block" type="text"   name="notifications-delete" id="notifications-delete" placeholder="Введите номер строки" />
                        <br/><br/>
                        <input class="submit1" type="submit" name="submit1" value="Удалить"/>
                    </form><br/>
                </div>

            </div><!-- END DIV FORM BOX -->
            
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